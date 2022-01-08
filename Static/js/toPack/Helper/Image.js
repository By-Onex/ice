/**
 * Хелпер для работы с изображениями
 *
 * @author paulwildboar
 */
var Helper_Image = {

    /**
     * Кропатор
     */
    cropper: {},

    /**
     * Ширина large версии изображения для сохранения
     */
    resizeWidth: 600,

    /**
     * Инициализация кропатора
     *
     * @param image       Селектор изображения для обрезания
     * @param preview     Селектор для превью
     * @param widthRatio  Отношение ширины
     * @param heightRatio Отношение высоты
     */
    initCrop: function(image, preview, widthRatio, heightRatio) {
        let self = this;
        let jcrop_api;
        $('#js-cropTarget').Jcrop({
            onChange: showCoords,
            onSelect: showCoords
        },function() {
            jcrop_api = this;
        });
        // Изменение координат
        function showCoords(c) {
            $('#x1').val(c.x);
            $('#y1').val(c.y);
            $('#x2').val(c.x2);
            $('#y2').val(c.y2);
            self.cropper = {
                image_id: '',
                x1: c.x,
                y1: c.y,
                x2: c.x2,
                y2: c.y2,
                width : $('.jcrop-holder').width(),
                height : $('.jcrop-holder').height(),
                resizeWidth: 600,
                resizeHeight: Math.round(600 / (c.w / c.h))
            };
            $('.js-cropComplete').css({
                width: Math.round($('.jcrop-holder').width()/c.w * $('.jcrop-holder').width()) + 'px',
                height: Math.round( $('.jcrop-holder').height()/c.h * $('.jcrop-holder').height()) + 'px',
                marginLeft: '-' + Math.round($('.jcrop-holder').width()/c.w * c.x) + 'px',
                marginTop: '-' + Math.round($('.jcrop-holder').height()/c.h * c.y) + 'px'
            });
            if(c.w > 0  && c.h > 0) {
                $('.js-crop').show();
            } else {
                $('.js-crop').hide();
            }
        }
    },

    /**
     * Обрезание фото
     *
     * @param imageId Id модели изображения
     */
    crop: function(imageId, widthRatio, heightRatio) {
        this.cropper.image_id = imageId;
        function callback(result) {
            if (result.data.error) {
                alert(result.data.error);
                return;
            }
            $(document).trigger('crop:success');
        }
        Controller.call(
            'Image/crop',
            this.cropper,
            callback
        );
    },


    /**
     * Добавление модального окна
     *
     * @param imageId     Id модели изображения
     * @param widthRatio  Отношение ширины
     * @param heightRatio Отношение высоты
     */
    addCropModal: function (imageId, widthRatio, heightRatio) {
        function callback(result) {
            $('.body__middle').append(result.html);
        }
        Controller.call(
            'Image/getCropModal',
            {
                imageId:     imageId,
                widthRatio:  widthRatio,
                heightRatio: heightRatio
            },
            callback
        );
    },

    /**
     * @description Установить обработчик открытия изображения в модальном окне.
     *
     * @param {string} selector Селектор открываемого img
     */
    setHandlerOpenByClick: function (selector) {
        let getInput = function (image) {
            let container = $('<div></div>')
                .addClass('modalImageVex')
                .html(image.outerHTML);
            let button = $('<div></div>')
                .addClass('js-buttonCloseModal')
                .addClass('modalImageVex__buttonClose');
            return container.prepend(button).get(0).outerHTML;
        };
        $(document).on('click', selector, function () {
            if ($('.vex-content').length) {
                return;
            }
            let image = !$(this).is('img')
                ? $('img', $(this)).get(0)
                : this;
            let dialog = vex.dialog.open({
                buttons: false,
                input: getInput(image),
                afterOpen: function () {
                    $('.js-buttonCloseModal', this.contentEl).click(function () {
                        dialog.close();
                    });
                }
            });
        });
    }
};