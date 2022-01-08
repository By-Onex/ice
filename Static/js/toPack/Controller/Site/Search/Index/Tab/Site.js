/**
 * Контроллер вкладки поиска
 * @type {{}}
 */
var Controller_Site_Search_Index_Tab_Site = {
    /**
     * Инициализация
     */
    init: function () {
        var self = this;
        if ($(window).width() < 480) {
            self.hideTabContent();
        } else {
            self.showTabContent();
        }
        $('.search__tabs').on('click', '.search__tab', function () {
            if (!$(this).hasClass('search__tab_state_active')) {
                self.showTabContent();
            }
        });
        $('.searchTabContentsContainer').on('click', '#search-button', function (e) {
            var query = $('#search-string').val();

            function callback(result) {
            }

            Controller.call(
                'Site_Search_Log/index',
                {
                    query: query
                },
                callback,
                true
            );
        });
    },

    /**
     * Показывать контент и активную вкладку
     */
    showTabContent: function () {
        var rel = location.hash.replace('#', '');
        if (rel == "") {
            rel = $('.searchTabContentsContainer').find('.tabContent > div').parent().attr('rel');
        }
        $('.tabContent[rel=' + rel + ']').removeClass('hidden');
        $('.search__tab[rel=' + rel + ']').addClass('search__tab_state_active');
    },

    /**
     * Скрыть контент и активную вкладку
     */
    hideTabContent: function () {
        $('.searchTabContentsContainer').find('.tabContent').addClass('hidden');
        $('.search__tab').removeClass('search__tab_state_active');
    }
};