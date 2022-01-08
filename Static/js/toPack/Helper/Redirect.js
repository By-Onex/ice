/**
 * Редирект с параметрами. Js и jQuery так не умеют (или я чего-то не знаю).
 * Умеет библиотека jQuery.redirect, но зачем, когда можно запилить хелпер
 *
 * @author paulwildboar
 */
var Helper_Redirect = {
    /**
     * Редирект с параметрами
     *
     * @param url Урл
     * @param params Параметры
     * @param method Метод передачи данных
     */
    redirect: function (url, params, method) {
        method = method || 'POST';
        let $form = $('<form></form>');
        $form.attr('method', method);
        $form.attr('action', url);
        $.each(params, function (key, value) {
            let $input = $('<input>');
            $input.attr('type', 'hidden');
            $input.attr('name', key);
            $input.attr('value', value);
            $form.append($input);
        });
        $form.appendTo('body').submit();
    }
};