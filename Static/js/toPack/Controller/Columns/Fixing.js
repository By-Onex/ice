/**
 * Контроллер привязки "скользящих" блоков
 */
var Controller_Columns_Fixing = {
    /**
     * @description Установить методы для фиксирования блока колонки.
     * @param {jQuery} block Объект блока.
     * @access private
     */
    _setMethodsForFixing(block) {
        jQuery.extend(block, {
            setAsFixed: function () {
                return this.addClass('fixed').removeAttr("style");
            },
            unsetAsFixed: function () {
                return this.removeClass('fixed').removeAttr("style");
            },
            fixToBottom: function () {
                this.unsetAsFixed()
                    .css({
                        'position': 'absolute',
                        'width': '300px',
                        'bottom': 0
                    });
            },
            fixToTop: function () {
                this.unsetAsFixed()
                    .css({
                        'position': 'absolute',
                        'width': '300px',
                        'top': '0px'
                    });
            }
        });
    },

    /**
     * @description Установить обработчик фиксирования блоков колонки.
     * @param {string} side Сторона колонки.
     */
    fixBlock: function (side) {
        let column = $(`.body__${side}`);
        if (!column.length) {
            return;
        }
        let bannerBlock = $(`.${side}-banner-fixed:first`);
        if (!bannerBlock.length) {
            return;
        }
        this._setMethodsForFixing(bannerBlock);
        let topPosition = $('.body__middle').offset().top;
        if ($('#content_change_city').length) {
            topPosition -= 64; //магическое число высоты блока смены города
        }
        const columnHigherThenMiddle = () => {
            return $(`.body__${side}`).outerHeight()
                > $('.body__middle').outerHeight();
        };
        let redirectBlock = 0;
        if ($('div').is('.city_change')) {
            redirectBlock = $('.city_change').height();
        }
        $(window).on('scroll', function () {
            if (columnHigherThenMiddle()) {
                return;
            }
            let scrollTop = $(window).scrollTop(),
                scrollBottom = scrollTop + $(window).height(),
                bannerBlockTop = bannerBlock.offset().top,
                bottomPosition = $('.footer').offset().top,
                bannerBlockBottom = bannerBlockTop + bannerBlock.outerHeight(),
                bannerBlockSize = bannerBlockBottom - bannerBlockTop,
                pageSize = bottomPosition - topPosition,
                scrollSize = scrollBottom - scrollTop;
            if (pageSize>bannerBlockSize) {
                if (bannerBlockSize >= scrollSize) {
                    if (scrollBottom >= bottomPosition) {
                        bannerBlock.fixToBottom();
                        column.css({'vertical-align': 'bottom'});
                    } else if (
                        (scrollBottom - 40 - bannerBlockSize < topPosition + redirectBlock)
                        || (scrollTop < topPosition + redirectBlock)
                    ) {
                        bannerBlock.fixToTop();
                        column.css({'vertical-align': 'top'});
                    } else if ((scrollTop > topPosition + redirectBlock)
                        && (scrollBottom < bottomPosition)
                        && (scrollBottom >= bannerBlockBottom)) {
                        bannerBlock.setAsFixed();
                    }
                } else {
                    if (
                        (scrollTop > topPosition + redirectBlock)
                        && (scrollTop + bannerBlockSize < bottomPosition)
                        && (bannerBlockTop >= topPosition + redirectBlock)
                    ) {
                        bannerBlock.removeAttr("style");
                        bannerBlock.css({
                            position: 'fixed',
                            top: '0px',
                            width: '300px'
                        });
                    } else if ((bannerBlockTop < topPosition + redirectBlock) || (scrollTop < topPosition + redirectBlock)) {
                        bannerBlock.fixToTop();
                        column.css({'vertical-align': 'top'});
                    } else if (scrollTop + bannerBlockSize >= bottomPosition) {
                        bannerBlock.fixToBottom();
                        column.css({'vertical-align': 'bottom'});
                    }
                }
            } else {
                bannerBlock.removeAttr("style");
            }
        });
        $(document).keydown(function (event) {
            if (event.keyCode === 35) {
                column.css({'vertical-align': 'bottom'});
                bannerBlock.removeAttr("style");
            }
        });
    },

    refresh: function () {
        $(window).off('scroll');
        $('.right-banner-fixed').removeAttr("style");
        $('.left-banner-fixed').removeAttr("style");
        this.fixBlock('left');
        this.fixBlock('right');
    }
};
