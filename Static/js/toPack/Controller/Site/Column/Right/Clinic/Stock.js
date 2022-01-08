/**
 * @desc Контроллер для виджета правой колонки
 */
var Controller_Site_Column_Right_Clinic_Stock = {
    init: function (containerSelector) {
        $(containerSelector).on('click', function (event) {
            if (event.which === 1) {
                document.location.href = '/clinics/'
                    + $(this).find('input[name=js-clinicId]').val()
                    + '/?utm_source=32top&utm_medium=textblock';
            }
        });
    }
};