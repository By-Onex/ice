/**
 *
 * @desc Контроллер баннеров
 * @package Ice_Vipgeo
 *
 */
var Controller_Banner = {
    /**
     * @desc первичные ключи всех баннеров. Устанавливаются из
     * Controller_Banner::toFile
     * @var Array
     */
    ids: [],

    _banners: null,
    
    scrolling: false,

    /**
     * @desc Места размещения, по которым будут
     * группироваться баннеры
     * @var Object
     */
    places: {},

    changeView : function (hide) {
        function callback (result) {
            if (result && result.data && result.data.redirect) {
                window.location = '/admin/';
            }
        }
        Controller.call (
            'Banner/changeView',
            {'hide': hide},
            callback,
            true
        );
    },

    get: function(admin) {
        var $banner = Controller_Banner._banners;
        var $another = $banner['another'];
        $banner = $banner['banners'];
        for (var place in $banner) {
            var html = '';
            for (var index in $banner [place]) {
                if ((typeof $banner[place][index]).toLowerCase() === 'string') {
                    if ($banner[place][index].indexOf('object') >= 0) {
                        $banner[place][index]
                            = $banner[place][index].replace('src =', 'rel =');
                    }
                    html += $banner[place][index];
                }
            }
            if (place === 'left_column' || place === 'right_column') {
                if (place === 'left_column') {
                    var $leftColumn = $('div.' + place);
                    var leftHtml = '<ul class="banner_ul" style="position:relative;">'+html+'</ul>';
                    var lAnother = {
                        'left_column': $another[place]
                    };
                } else {
                    var $rightColumn = $('div.' + place);
                    var rightHtml = '<ul class="banner_ul" style="position:relative;">'+html+'</ul>';
                    var rAnother = {
                        'right_column' : $another[place]
                    };
                }
            } else {
                $('div.' + place).html(html).addClass('queue_draw');
            }
        }
        $(window).scroll(function() {
            if (
                $leftColumn.offset().top <= ($(window).scrollTop() + $(window).height())
                && !$leftColumn.find('ul.banner_ul').length
            ) {
                $leftColumn.html(leftHtml).addClass('queue_draw');
                Controller_Banner.queue(lAnother);
                if (!admin) {
                    $('li.left_column').bannerSlider({
                        interval : 5000,
                        speed : 1500,
                        elem : 'div'
                    });
                }
            }
            if (
                $rightColumn.offset().top <= ($(window).scrollTop() + $(window).height())
                && !$rightColumn.find('ul.banner_ul').length
            ) {
                $rightColumn.html(rightHtml).addClass('queue_draw');
                Controller_Banner.queue(rAnother);
                if (!admin) {
                    $('li.right_column').bannerSlider({
                        interval : 5000,
                        speed : 1500,
                        elem : 'div'
                    });
                }
            }
        });
        Controller_Banner.queue($another);
        if (!admin) {
            $('#middle_header_rotate').bannerSlider({
                interval : 10000,
                speed : 1000,
                elem : 'li',
                stopOnMouse : false
            });
        }
    },

    setBanners: function (banners, admin) {
        this._banners = banners;
        Controller_Banner.get(admin);
    },

    /**
     * @desc Установка баннеров по смещению
     * @param offset int
     * @param admin boolean
     */
    setByOffset: function (offset, admin, places_size) {
        var banner;
        // Заполяем массивы с позициями
        for (var i in this.ids) {
            var id = this.ids [i];
            banner = Ice.Resource_Manager.get ('Model', 'Banner__' + id);
            if (this.places [banner.place]) {
                if (!this.places [banner.place]['p' + banner.position]) {
                    this.places [banner.place]['p' + banner.position] = [];
                }
                this.places [banner.place]['p' + banner.position].push (banner);
            } else {
                console.log ('no place: ' + banner.place + ' / ' + banner.id);
            }
        }
        var another = {};
        var banners = {};
        // Идем по всем позициям
        for (var place in this.places) {
            var current_size = places_size[place]['size'];
            var pos_index = 0;
            another [place] = {};
            banners [place] = [];
            var i = 0;
            for (var pos in this.places [place]) {
                if (i < current_size || !Number(current_size)) {
                    this.places [place][pos].sort (function (a, b) {
                        if (a.sort < b.sort) {
                            return -1;
                        }
                        if (a.sort > b.sort) {
                            return 1;
                        }
                        return 0;
                    });
                    var index_active = offset % this.places [place][pos].length;
                    for (var index in this.places [place][pos]) {
                        banner = this.places [place][pos][index];
                        if (admin) {
                            // Для админа разницы нет
                            banners [place][++pos_index] = banner.html;
                        } else if (index == index_active) {
                            // Баннер, который показывается сразу
                            banners [place][pos_index] = banner.html;
                        } else {
                            // Баннер, который будет в ротации
                            if (!another [place][pos_index]) {
                                another [place][pos_index] = [];
                            }
                            another [place][pos_index].push (banner.html);
                        }
                    }
                    ++pos_index;
                }
                ++i;
            }
        }
        // Выводим как и раньше
        this._banners = banners;
    },

    queue: function(banners) {
        for (var place in banners) {
            if (place === 'left_column' || place === 'right_column') {
                Controller_Banner.draw(place, banners, 5000);
            }
            if (place === 'middle_header') {
                Controller_Banner.draw(place, banners, 10000);
            }
        }
    },

    draw: function(place, banners, timeout) {
        if (!$('div.'+place).hasClass('queue_draw')) {
            return;
        }
        var repeat = false;
        var $timeout = timeout ? timeout : 5000;
        if (place == 'left_column' || place == 'right_column') {
            for (var index in banners[place]) {
                var $placeholder = $('.'+place+'_'+index);
                var $length = banners[place][index].length;
                var $count = $placeholder.children('div').length - 1;
                if ($count < $length) {
                    var $banner = $(banners[place][index][$count]);
                    $banner
                    .css({
                        position : 'absolute',
                        top : 0,
                        left : 0,
                        opacity : 0
                    })
                    .attr('elem_sort_position', $count + 1);
                    $placeholder.append($banner);
                    repeat = true;
                }
            }
        }
        if (place == 'middle_header') {
            for (var index in banners[place]) {
                var $placeholder = $('#middle_header_rotate');
                var $length = banners[place][index].length;
                var $count = $placeholder.children('li').length - 1;
                if ($count < $length) {
                    var $banner = $(banners[place][index][$count]);
                    $banner.css({
                        position : 'absolute',
                        top : 0,
                        left : 0,
                        opacity : 0
                    })
                    .attr('elem_sort_position', $count+1);
                    $placeholder.append($banner);
                    repeat = true;
                }
            }
        }
        if (repeat) {
            setTimeout(function() {
                Controller_Banner.draw(place, banners, $timeout);
            }, $timeout);
        }

    },

    selectViewType: function() {
        var $teasers = $('div.appendix[rel=Head_bottom] .teaser_block .teaser_element');
        if($teasers.length > 8) {
            $('div.appendix.head_bottom .teaser_block').wrap('<div class="teaser_block_wrapper"></div>');
            $('div.appendix.head_bottom .button_block .teaser_right_button').show();
            $('div.appendix.head_bottom .button_block .teaser_left_button').show();
            $('div.appendix.head_bottom').css('paddingLeft', '35px');
            $('div.appendix.head_bottom').css('paddingRight', '35px');
            $('div.appendix.head_bottom').css('maxWidth', '1130px');
            $('.appendix.head_bottom .teaser_block').css('width', '400%');
            $teasers.css('float', 'left');
            this.shuffle($('div.appendix[rel=Head_bottom] .teaser_block tr'));
        }
        if($teasers.length > 0) {
            $('div.appendix[rel=Head_bottom]').show();
        }
    },

    moveTeasersLeft: function() {
        var self = this;
        if (this.scrolling) {
            return;
        }
        this.scrolling = true;
        var $teaser_block = $('div.appendix[rel=Head_bottom] table.teaser_block');
        var $teasers = $teaser_block.find('.teaser_element');
        var $first_teaser = $teasers.first();
        $teaser_block.animate(
            {
                'left': -$first_teaser.outerWidth()
            },
            function() {
                $teaser_block.find('tr').append($first_teaser);
                $teaser_block.css('left', 0);
                self.scrolling = false;
            }
        );
    },

    moveTeasersRight: function() {
        var self = this;
        if (this.scrolling) {
            return;
        }
        this.scrolling = true;
        var $teaser_block = $('div.appendix[rel=Head_bottom] table.teaser_block');
        var $teasers = $teaser_block.find('.teaser_element');
        var $last_teaser = $teasers.last();
        $teaser_block.find('tr').prepend($last_teaser);
        $teaser_block.css('left',-$last_teaser.outerWidth());
        $teaser_block.animate(
            {
                'left': 0
            },
            function() {
                self.scrolling = false;
            }
        );
    },

    init: function() {
        var $teasers = $('div.appendix[rel=Head_bottom] .teaser_block .teaser_element');
        if ($teasers.length < 8) {
            var newPadding = (parseInt($('.teaser_block_wrapper').css('width'))
                - 132 * $teasers.length) / (2 * $teasers.length);
            $teasers.css('padding', '0 ' + newPadding + 'px');
            $('.teaser_left_button').hide();
            $('.teaser_right_button').hide();
        }
    },

    shuffle: function($teasers) {
        (function($) {
            $.fn.shuffle = function() {
                return this.each(function(){
                    var items = $(this).children().clone(true);
                    return (items.length) ? $(this).html($.shuffle(items)) : this;
                });
            };
            $.shuffle = function(arr) {
                for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);
                return arr;
            }
        })(jQuery);
        $teasers.shuffle();
    },

    clickRebind: function () {
        $('body').on('click', '.adapterBannerClick', function () {
            console.log($(this));
            console.log($(this).attr('data-banner_id'));
            Helper_Event.save('clickBanner', {
                Banner__id: $(this).data('banner_id')
            });
        });
    },

    /**
     * Добавление utm меток для банеров 1
     */
    addUtmToTopBaner: function() {
        $('.js-top_banner__slide-wrapper').find('a').each(function (index, item) {
            var utm = '?utm_source=32top&utm_medium=banner1';
            var link = $(this).attr('href');
            if (link) {
                $(this).attr('href', Helper_Utm.addUtm($(this).attr('href'), utm));
            }
        });
    }
};