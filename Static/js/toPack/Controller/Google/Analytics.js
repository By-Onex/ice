/**
 * Контроллер взаимодействия с Google Analytics
 *
 * @link https://developers.google.com/analytics/devguides/collection/analyticsjs/how-analyticsjs-works
 */
var Controller_Google_Analytics = {
    /**
     * Отправить событие в очередь команд аналитики.
     *
     * @param {string} category - категория
     * @param {string} action   - действие
     * @param {string} label    - ярлык
     */
    send: function (category, action, label) {
        if (typeof ga !== 'function') {
            return;
        }
        ga('send', 'event', category, action, label);
        if (!document.domain.match('32top\.ru')) {
            console.log(`send goal:${category} ${action} ${label}`);
        }
    }
};