/**
 * Слайдеры для переключения контента
 * Простые и незамысловатые, как сюжет "50 оттенков серого"
 *
 * HTML код слайдера:
 * <div>
 *      <div class="js-horizontal-slider-content-block">
 *          <div class="js-horizontal-slider-item">{$someContent}</div>
 *          <div class="js-horizontal-slider-item">{$someContent}</div>
 *      </div>
 *      <div>
 *          <div class="js-horizontal-slider-right-button">Сюда</div>
 *          <div class="js-horizontal-slider-left-button">Туда</div>
 *      </div>
 * </div>
 *
 * Подключение слайдера
 * <script>
 * var config = {
 *        leftButtonSelector: '.js-horizontal-slider-left-button',
 *        rightButtonSelector: '.js-horizontal-slider-right-button',
 *        sliderBlockSelector: '.js-horizontal-slider-content-block',
 *        sliderElementSelector: '.js-horizontal-slider-item',
 *        delay : 500
 *    };
 * var MrSlider = new HorizontalSlider();
 * MrSlider.init(config);
 * </script>
 */

/**
 * Горизонтальный слайдер для цикличного прокручивания элементов
 */
function HorizontalSlider() {
    this.$sliderBlock = undefined;
    this.config = {
        leftButtonSelector:     '.js-horizontal-slider-left-button',
        rightButtonSelector:    '.js-horizontal-slider-right-button',
        sliderBlockSelector:    '.js-horizontal-slider-content-block',
        sliderElementSelector:  '.js-horizontal-slider-item',
        delay: 300
    };

    /**
     * Инициализация, перегрузка конфига, подписка на клики
     */
    this.init = function (config) {
        var self = this;
        if (config) {
            self.config = config;
        }
        if (self.config['direction'] != 'inverse') {
            $(self.config['leftButtonSelector']).click(function () {
                self.moveRight($(this));

            });
            $(self.config['rightButtonSelector']).click(function () {
                self.moveLeft($(this));
            });
        }
        else {
            $(self.config['leftButtonSelector']).click(function () {
                self.moveLeft($(this));

            });
            $(self.config['rightButtonSelector']).click(function () {
                self.moveRight($(this));
            });
        }
        self.$sliderBlock = $(self.config['sliderBlockSelector']);
    };

    /**
     * Двинуть влево
     */
    this.moveLeft = function ($button) {
        var self = this;
        var $sliderBlock = $button.parent().find(self.config['sliderBlockSelector']);
        $button.unbind();
        var $sliderElements = $sliderBlock.find(self.config['sliderElementSelector']);
        var $firstElement = $sliderElements.first();
        $sliderBlock.append($firstElement.clone());
        var marginLeft = parseInt($firstElement.css('margin-left'));
        var offset = -$firstElement.innerWidth() - marginLeft;
        $sliderBlock.animate(
            {
                left: offset
            },
            self.config['delay'],
            function callback() {
                $firstElement.remove();
                self.$sliderBlock.css('left', 0);
                $button.bind('click', function () {
                    self.moveLeft($(this));
                });
            }
        );
    };

    /**
     * Двинуть вправо
     */
    this.moveRight = function ($button) {
        var self = this;
        var $sliderBlock = $button.parent().find(self.config['sliderBlockSelector']);
        $button.unbind();
        var $sliderElements = $sliderBlock.find(self.config['sliderElementSelector']);
        var $lastElement = $sliderElements.last();
        $sliderBlock.css('left', -$lastElement.innerWidth());
        $sliderBlock.prepend($lastElement.clone());
        $sliderBlock.animate(
            {
                left: 0
            },
            self.config['delay'],
            function callback() {
                $lastElement.remove();
                $button.bind('click', function () {
                    self.moveRight($(this));
                });
            }
        );
    };
};

/**
 * Вертикальный слайдер для цикличного прокручивания элементов
 */
function VerticalSlider() {
    this.$sliderBlock = undefined;
    this.config = {
        upButtonSelector:       '.js-horizontal-slider-up-button',
        downButtonSelector:     '.js-horizontal-slider-down-button',
        sliderBlockSelector:    '.js-horizontal-slider-content-block',
        sliderElementSelector:  '.js-horizontal-slider-item',
        delay: 300,
        marginTop: 0
    };

    /**
     * Инициализация, перегрузка конфига, подписка на клики
     */
    this.init = function (config) {
        var self = this;
        if (config) {
            self.config = config;
        }
        if (self.config['direction'] != 'inverse') {
            $(self.config['upButtonSelector']).click(function () {
                self.moveDown($(this));

            });
            $(self.config['downButtonSelector']).click(function () {
                self.moveUp($(this));
            });
        }
        else {
            $(self.config['upButtonSelector']).click(function () {
                self.moveUp($(this));

            });
            $(self.config['downButtonSelector']).click(function () {
                self.moveDown($(this));
            });
        }
        self.$sliderBlock = $(self.config['sliderBlockSelector']);
    };

    /**
     * Двинуть вверх
     */
    this.moveUp = function ($button) {
        var self = this;
        var $sliderBlock = $button.parent().find(self.config['sliderBlockSelector']);
        $button.unbind();
        var $sliderElements = $sliderBlock.find(self.config['sliderElementSelector']);
        var $firstElement = $sliderElements.first();
        $sliderBlock.append($firstElement.clone());
        var offset = -$firstElement.innerHeight();
        if (self.config['marginTop']) {
            offset -= self.config['marginTop'];
        }
        $sliderBlock.animate(
            {
                top: offset
            },
            self.config['delay'],
            function callback() {
                $firstElement.remove();
                self.$sliderBlock.css('top', 0);
                $button.bind('click', function () {
                    self.moveUp($(this));
                });
            }
        );
    };

    /**
     * Двинуть вниз
     */
    this.moveDown = function ($button) {
        var self = this;
        var $sliderBlock = $button.parent().find(self.config['sliderBlockSelector']);
        $button.unbind();
        var $sliderElements = $sliderBlock.find(self.config['sliderElementSelector']);
        var $lastElement = $sliderElements.last();
        var offset = $lastElement.innerHeight();
        $sliderBlock.css('top', -offset);
        $sliderBlock.prepend($lastElement.clone());
        $sliderBlock.animate(
            {
                top: 0
            },
            self.config['delay'],
            function callback() {
                $lastElement.remove();
                $button.bind('click', function () {
                    self.moveDown($(this));
                });
            }
        );
    };
};