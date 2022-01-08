/**
 *
 * @desc Контроллер для редиректа между городами.
 * @author Yury Shvedov
 * @package Ice_Vipgeo
 * 
 */
var Controller_Redirector = {
    /**
     * @desc Показывает диалог редиректа
     */
    show: function (top_domain, current_city_name, redirect_subdomain,
        redirect_city_name, redirect_uri
    ) {
        $('<tr><td id="unit_change_region"></td></tr>').appendTo($('#header'));
        View_Render.assign ({
            top_domain: top_domain,
            current_city_name: current_city_name,
            redirect_city_name: redirect_city_name,
            redirect_subdomain: redirect_subdomain,
            redirect_uri: redirect_uri //window.location.pathname
        });
        let text = View_Render.fetch('js/Controller/Redirector/show.tpl');
        $('#unit_change_region').html(text);
        $('#unit_change_region a.oldcity').click (function () {
            $('#unit_change_region').remove();
        });
        $('#unit_change_region #close_change_region').click (function() {
            $('#unit_change_region').remove();
        });
    },
    
    /**
     * @desc Показывает диалог редиректа
     */
    init: function (top_domain, redirect_subdomain) {
        let container = $('div#content_change_city');
        container.on('click', '.js-btnCityChange, .js-btnCityStay', () => {
            container.slideUp(100, () => container.remove());
            this.setCookieCityConfirm(redirect_subdomain, top_domain);
        });
    },

    /**
     * @description Установить cookie что город подтверждён на 30 дней.
     *
     * @param {string} subdomain Поддомен.
     * @param {string} domain    Основной домен.
     */
    setCookieCityConfirm(subdomain, domain) {
        let expires = new Date();
        expires.setDate(new Date().getDate() + 30);
        document.cookie = `url=${encodeURIComponent(subdomain)};`
            + `expires=${expires.toUTCString()};`
            + `path=/;`
            + `domain=.${domain}`;
    }
};