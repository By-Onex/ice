/**
 * Контроллер взаимодействия с Яндекс Метрикой
 */
var Controller_Yandex_Metrika = {
    /**
     * Передать информацию о достижении цели
     *
     * @param targetName идентификатор цели
     */
    reachGoal(targetName) {
        if (typeof(yaCounter161378) !== 'object') {
            return;
        }
        yaCounter161378.reachGoal(targetName);
        if (!document.domain.match('32top\.ru')) {
            console.log('running goal:' + targetName);
        }
    },

    /**
     * Передать информацию о достижении целей
     *
     * @param {Object} targetsName идентификатор целей
     */
    reachGoals(targetsName) {
        if (typeof targetsName !== "object") {
            return;
        }
        for (let key in targetsName) {
            this.reachGoal(targetsName[key]);
        }
    }
};