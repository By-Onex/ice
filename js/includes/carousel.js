(function($){
    $.fn.myCarousel = function(options) {
        var settings = {
            visible: 5,
            rotateBy: 1,
            speed: 500,
            btnNext: null,
            btnPrev: null,
            auto: null,
            backSlide: false,
            itemSize: 100,
            btnSize: 30
        };
        return this.each(function() {
            if (options) {
                $.extend(settings, options);
            }
            var $this = $(this);
            var $carousel = $this.find('ul');
            var itemWidth = settings.itemSize;
            var itemsTotal = $carousel.children().length;
            var running = false;
            var intID = null;
            $this.css({
                'position': 'relative',
                'overflow': 'hidden',
                'width': settings.visible * itemWidth + settings.btnSize * 2 + 'px'
            });
            $carousel.css({
                'position': 'relative',
                'width': 99999 + 'px',
                'left': 0
            });
            // параметр dir(boolean) - false(сдедующий), true(предыдущий)
            function slide(dir) {
                var direction = !dir ? -1 : 1;
                var leftIndent = 0;
                if (!running) {
                    running = true;
                    if (intID) {
                        window.clearInterval(intID);
                    }       
                    if (!dir) {
                        $carousel.children(':last').after($carousel.children().slice(0, settings.rotateBy).clone(true));
                    } else {
                        $carousel.children(':first').before($carousel.children().slice(itemsTotal - settings.rotateBy, itemsTotal).clone(true));
                        $carousel.css('left', -itemWidth * settings.rotateBy + 'px');
                    }
                    leftIndent = parseInt($carousel.css('left')) + (itemWidth * settings.rotateBy * direction);
                    $carousel.animate({
                        'left': leftIndent
                    }, {
                        queue: false, 
                        duration: settings.speed, 
                        complete: function() {
                            if (!dir) {
                                $carousel.children().slice(0, settings.rotateBy).remove();
                                $carousel.css('left', 0);
                            } else {
                                $carousel.children().slice(itemsTotal, itemsTotal + settings.rotateBy).remove();
                            }
                                                
                            if (settings.auto) {
                                intID = window.setInterval(function() {
                                    slide(settings.backslide);
                                }, settings.auto);
                            }
                            running = false;
                        }
                    });
                }
                return false;
            }
            $(settings.btnNext, $this).click(function() {
                return slide(false);
            });
            $(settings.btnPrev, $this).click(function() {
                return slide(true);
            });
            if (settings.auto) {
                intID = window.setInterval(function() {
                    slide(settings.backslide);
                }, settings.auto);
            }
        });
    };
})(jQuery);