/**
 * Помошник для работы с библиотекой Html2canvas
 *
 * @author Ziht
 */
var Helper_Html2canvas = {

    canvas: null,

    /**
     * Создаём canvas
     */
    buildCanvas: function ($block) {
        let self = this;
        html2canvas($block, {
            logging: true,
            width: $block.width(),
            height: $block.height()
        }).then(function(canvas) {
            self.canvas = canvas;
        }).catch(function(error) {
            console.log(error);
            return null;
        });
        return this;
    },

    /**
     * Возвращает созданный canvas
     */
    getCanvas: function () {
        return this.canvas;
    },

    /**
     * Сохраняем canvas для модели с определённым id
     */
    saveCanvas: function (canvas, modelName, modelId) {
        let image = canvas.toDataURL('image/png').replace(/data:image\/png;base64,/, '');
        Controller.call(
            'Html2canvas/save',
            {
                modelName: modelName,
                modelId: modelId,
                imageInBase64: image
            },
            (result) => {console.log(result.data.url);},
            true);
    }
};