/** Аналог функции isset из php */
function isset(something) {
    return typeof(something) != 'undefined'
}

/** Получить случайный элемент из множества */
jQuery.fn.random = function () {
    var randomIndex = Math.floor(Math.random() * this.length);
    return jQuery(this[randomIndex]);
};