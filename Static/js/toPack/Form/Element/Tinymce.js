/**
 * Инициализация визивига
 * 
 * @author markov 
 */
var Form_Element_Tinymce = {
    /**
     * Инициализация
     */
    init: function(data) {
        Loader.load('Controller_Tinymce');
        Controller_Tinymce.init($('#' + data.id), data.template);
    }
};