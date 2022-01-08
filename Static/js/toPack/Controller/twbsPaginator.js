/**
 * Обертка для twbs пагинатора
 */
var data = {};
var needRefresh = false;
var needUpdate = false;
var $contentContainer;
var defaultConfig = {
    totalPages: 1,
    startPage: 1,
    visiblePages: 5,
    initiateStartPageClick: false,
    hideOnlyOnePage: true,
    href: true,
    hrefString: '/page-{{page}}/',
    firstPageHref: null,
    pageVariable: '{{number}}',
    totalPagesVariable: '{{total_pages}}',
    page: null,
    first: ' ',
    prev: ' ',
    next: ' ',
    last: ' ',
    loop: false,
    onPageClick: null,
    paginationClass: 'paginator default-indent indent-top',
    nextClass: 'paginator-right-arrow',
    prevClass: 'paginator-left-arrow',
    lastClass: 'page-item last',
    firstClass: 'page-item first',
    pageClass: 'paginator__item',
    activeClass: 'active',
    disabledClass: 'hidden',
    anchorClass: 'page-link',
    async: false,
    trimComments: false
};

$.fn.initTwbs = function (config) {
    function onChange(page) {
        page = page || 1;
        data.page = page;
        if (needUpdate) {
            Controller_Push_State.search(data);
            return;
        }
        $contentContainer.css('visibility', 'hidden');
        function callback(result) {
            if (result.data.redirect && window.location.pathname != result.data.redirect) {
                window.location.href = result.data.redirect;
                return;
            }
            $contentContainer.css('visibility', 'visible');
            $contentContainer.empty().html(result.html);
            if (needRefresh) {
                needRefresh = false;
                self.empty();
                config.totalPages = parseInt(result.data.total);
                config.startPage = parseInt(result.data.page);
                self.twbsPagination(config);
            }
            Helper_Scroll.scrollTo($contentContainer, 100);
            Controller_Columns_Fixing.refresh();
            $('.lazyload').lazyload({
                failure_limit : 10
            });
            if (config.trimComments) {
                Controller_Component_Roll_Includes_Clinic_Item.init();
                Controller_Component_Roll_Includes_Clinic_Item.doubtful();
            }
        }
        Controller.call(
            config.controllerCall,
            data,
            callback,
            true
        );
    }
    var self = this;
    config = $.extend({}, defaultConfig, config);
    data = config.data;
    if (config.async) {
        $contentContainer = $(config.containerSelector);
        config.href = false;
        config.hrefString = null;
        if (!config.withPushState) {
            config.onPageClick = function (event, page) {
                onChange(page);
            };
        } else {
            needUpdate = true;
            config.onPageClick = function (event, page) {
                onChange(page);
            };
        }
    }
    self.on('pagination:updateSource', function(e, eventData) {
        data = eventData;
        needRefresh = true;
        onChange();
    });
    self.on('pagination:updateData', function(e, eventData) {
        data = eventData;
    });
    self.twbsPagination(config);
    return self;
};