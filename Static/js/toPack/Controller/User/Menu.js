/**
 * Контроллер меню
 */
var Controller_User_Menu = {
    /**
     * @var boolean Меню открыто
     */
    isMobileMenuVisible: false,

    /**
     * Обновить меню.
     *
     * @param $element object Контейнер меню для замены
     * @param forced   bool   Заменить меню без проверки на success
     */
    reloadAuthInfo: function ($element, forced) {
        this.reload($element, 'User_Menu/index', forced);
    },

    /**
     * Обновить верхнее меню-бар для мобильных.
     */
    reloadMobileAuthInfo: function () {
        this.reload($('.js-mobileContainer'), 'Site_Menu_Mobile/index' ,true);
    },

    /**
     * Проинициализировать меню для мобильных
     */
    mobileMenu: function () {
        var self = this,
            mobileMenuCheckbox = $('.m-menu__menu-toggle-checkbox');
        mobileMenuCheckbox.on('click', function() {
            self.isMobileMenuVisible = !self.isMobileMenuVisible;
        });
        $(window).on('mouseup', function (e) {
            if (!self.isMobileMenuVisible) {
                return;
            }
            var div = $('.m-menu-items-wrapper'),
                burger = $('.burger');
            if ((!burger.is(e.target) && burger.has(e.target).length === 0)
                && (!div.is(e.target) && div.has(e.target).length === 0)
            ) {
                mobileMenuCheckbox.removeAttr("checked");
                burger.trigger('click');
                $('.ham').attr('class', 'ham hamRotate showMenu');
            }
        });
        $('.m-menu__search').on('click', function () {
            $('.search-site').toggleClass('hidden');
        })
    },

    /**
     * Обновить меню.
     *
     * @param $element   object Контейнер меню для замены
     * @param controller string Имя бэкенд контроллера меню
     * @param forced     bool   Заменить меню без проверки на success
     */
    reload: function($element, controller, forced){
        function callback(result) {
            if ((result.data.success || forced) && result.html) {
                $element.replaceWith(result.html);
            }
        }
        Controller.call(
            controller,
            {},
            callback,
            false
        );
    }
};
