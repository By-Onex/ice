/**
 * Контроллер баннеров в шапке сайта
 */
var Controller_Banner_Header_Top = {
    config: {
        topBannersSelector: '.top-banner__slide',
        containerOfSlides: '.js-top_banner__slide-wrapper'
    },

    /**
     * Инициализация
     * Если разрешение меньше 1060, показывается только один баннер
     */
    init: function (groupsHtml) {
        this.loadBanner(groupsHtml);
        let $topBanners = $(this.config.topBannersSelector);
        if (window.innerWidth <= 1060) {
            $topBanners.addClass('hidden');
            $topBanners.random().removeClass('hidden');
        }
    },

    /**
     * @description Добавить баннеры в контейнер.
     *
     * @param {Array} groupsHtml Баннеры.
     */
    loadBanner: function (groupsHtml) {
        if (!groupsHtml || !groupsHtml.length) {
            return;
        }
        groupsHtml.forEach((slide) => {
            $(this.config.containerOfSlides).append(slide);
        });
    }
};