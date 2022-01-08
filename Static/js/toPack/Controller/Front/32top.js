/**
 * Контроллер для фронта
 */
var Controller_Front_32top = {

    /**
     * id текущего города
     *
     * @param {Number}
     */
    cityId: 0,

    /**
     * Инициализация других контроллеров
     */
    init: function (cityId) {
        this.cityId = parseInt(cityId);
        Call_List.append('Controller_Firebase', 'initPush');
        Call_List.append('Controller_Authentication_Social', 'init');
        Call_List.append('Controller_Site_Authorization', 'init');
        Call_List.append('Controller_Banner', 'clickRebind');
        Call_List.append('Controller_Front_32top', 'addUtmToVerticalTeaser');
        Call_List.append('Controller_Front_32top', 'initButtonUp');
        Call_List.append('Controller_Site_Column_Right_Clinic_Stock', 'init', ['.js-rightWidgetBlockItem']);
        Call_List.append('Controller_Banner', 'addUtmToTopBaner');
        Call_List.append('Controller_Front_32top', 'addUtmToAdditionalMenu');
        Call_List.append('Controller_Front_32top', 'addUtmToBanner7');
        Call_List.append('Controller_Front_32top', 'initHideBanners');
        Call_List.append('Controller_Front_32top', 'setHandlersForWindowOpeningByClick');
        Call_List.append('Controller_Front_32top', 'dispatchEventResizeAfterLoad');
        Call_List.append('Controller_Front_32top', 'initLazyload');
    },

    /**
     * добавление utm к эелементам доп меню
     */
    addUtmToAdditionalMenu: function () {
        const utm = '?utm_source=32top&utm_medium=mainmenu';
        $('a', $('.clinics-filter__item')).each(function () {
            this.href = Helper_Utm.addUtm(this.href, utm);
        });
        $('.clinics-filter-main_item', $('.clinics-filter-main'))
            .each(function () {
                this.href = Helper_Utm.addUtm(this.href, utm);
            });
    },

    /**
     * Добавление utm меток для новых тизеров (временный костыль, чтобы различать тизеры и чтобы не пилить новую баннерную позицию)
     * Кто сказал временный? Ок, дальше говнокодим...
     * Нет ничего более постоянного, чем временное
     */
    addUtmToVerticalTeaser: function() {
        const setUtmOnLinks = (selectorContext, utm) => {
            $('a.js-TeaserItemBlockLink, a.js-TeaserLink', $(selectorContext))
                .each(function () {
                    this.href = Helper_Utm.addUtm(this.href, utm);
                });
        };
        ['.verticalTeasersWidget', '.mobileTeasersWidget'].forEach((item) => {
            setUtmOnLinks(item, '?utm_source=32top&utm_medium=banner2');
        });
    },

    /**
     * добавляет utm метку к баннеру 7
     */
    addUtmToBanner7: function() {
        var utm = '?utm_source=32top&utm_medium=banner7';
        $('.js-banner7-utm').each(function () {
            this.href = Helper_Utm.addUtm(this.href, utm);
        });
    },

    /**
     * Инициализация кнопки "Наверх" слева
     */
    initButtonUp: function () {
        let button = $('.button-up');
        let prevWindowPos = 0;
        $(document).scroll(function () {
            let newWindowPos = $(this).scrollTop();
            let direction = newWindowPos - prevWindowPos;
            prevWindowPos = newWindowPos;
            if ($(this).scrollTop() > $(window).height() && direction < 0) {
                button.fadeIn();
            } else {
                button.fadeOut();
            }
        });
        button.click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            Controller_Yandex_Metrika.reachGoal('UPBUTTON');
        });
    },

    /**
     * инициализация скрытия баннеров
     */
    initHideBanners: function () {
        let classes = '.side-banners__item';
        classes += this.cityId !== 1 ? ', .top-banner__container' : '';
        $(classes).each(function () {
            let buttonClose = document.createElement('div');
            buttonClose.classList.add('hide-banners');
            buttonClose.dataset.position = $(this).data('position');
            buttonClose.innerHTML = 'реклама Х';
            this.prepend(buttonClose);
        });
        $(document).on('click', '.hide-banners', function () {
            Controller_Yandex_Metrika.reachGoal('addoff');
            let buttonClose = $(this);
            Controller.call(
                'Banner/hideBanners',
                {
                    position: buttonClose.data('position')
                },
                function () {
                    buttonClose.parent().parent().remove();
                    Controller_Columns_Fixing.refresh();
                },
                true
            )
        });
    },

    /**
     * @todo Вероятно стоит внедрить более изящный способ разрешения проблемы с
     *       работой vendor скриптов(Swiper.js) при отложенной загрузке css.
     *
     * @description Отправить событие resize для window с таймаутом после
     *              готовности страницы. Время timeout выбрано случайно.
     */
    dispatchEventResizeAfterLoad() {
        const dispatchWithTimeout = () => {
            setTimeout(() => window.dispatchEvent(new Event('resize')), 800);
        };
        document.readyState !== 'complete'
            ? document.addEventListener('load', dispatchWithTimeout)
            : dispatchWithTimeout();
    },

    /**
     * @description Выполнить инициализацию lazyload элементов.
     */
    initLazyload() {
        $('.lazyload').lazyload({
            failure_limit : 30
        });
    },

    /**
     * @description Установить обработчики нажатий на элементы для
     *              открытия нового окна указанного в data-href.
     */
    setHandlersForWindowOpeningByClick() {
        $(document).on('click', '.js-openWindowByClick', function () {
            window.open($(this).data('href'));
        });
    }
};