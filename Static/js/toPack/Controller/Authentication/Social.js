/**
 * Точка входа для получения линков для авторизации
 * 
 * @author arctikon
 * @author imax
 */
var Controller_Authentication_Social = {

    /**
     * Информация о пользователе
     */
    userData: null,

    /**
     * @description Обработать пост аутентификацию пользователя.
     *
     * @access private
     */
    _handleAuth() {
        Controller_User_Menu.reloadAuthInfo($('#block_authorization_users'), false);
        Controller_User_Menu.reloadMobileAuthInfo();
        Controller_Site_Authorization.updateForumAuthPanel();
        Controller_Site_Authorization.hideForm();
    },

    /**
     * Инициализация
     */
    init() {
        Controller_Yandex_Plugin_Social.setHandlerUserAuth(() => {
            this._handleAuth();
        });
    }
};
