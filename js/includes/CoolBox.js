var CoolBox = {



	_exists: false,

	_count: 0,

	_boxes: [],

	_options: [],



	options: {},



	show : function(options){



		CoolBox._boxes.push (this);



		var $CoolBox = CoolBox._boxes[CoolBox._boxes.length - 1];



		CoolBox.options = jQuery.extend({

			opacity : false, // прозрачность подложки

			width : false, // ширина контейнера

			height : false, // высота контейнера

			maxWidth : false, // максимальная ширина контейнера

			maxHeight : false, // максимальная высота контейнера

			speed : 300, // скорость появления

			addClass : false, // css класс для модального окна

			style : false, // стили контейнера

			overlay : true, // показывать ли подложку

			elem : false, // элемент, передаваемый в контейнер

			cloneElem : false, // если true, то элемент не удаляется

			html : false, // html, передаваемый в контейнер

			title : false, // текст заголовка

			titleCss : false, // стили заголовка

			hideOnEsc : true, // прятать ли по нажатию клавиши ESC

			closeBtn : true, // Показывать ли кнопку закрытия окна

			closeBtnText : 'Закрыть', // Текст кнопки закрытия окна

			multi : false, // Разрешить вызывать несколько окон

			beforeShow : function(content, container){}, // Действие до показа окна

			afterShow : function(content, container){}, // Действие после показа окна

			/**

			 * @desc Действие после вызова метода success у модального окна

			 * @var function

			 */

			onSuccess: function () {},

			/**

			 * @desc Действие после вызова метода success у модального окна

			 * и отправкой CoolBox.hide() этому окну.

			 * @var function

			 */

			afterSuccess: function () {},

			afterHide : function(){} // Действие после скрытия окна

		},options);



		CoolBox._options.push(CoolBox.options);



		options = CoolBox.options;



		if (CoolBox._exists && !options.multi)

		{

			return;

		}



		CoolBox._exists = true;

		CoolBox._count = parseInt(CoolBox._count)+1;



		var $body = jQuery('body');



		$body.addClass('fixed_body');



		var  ie6 = ($.browser.msie && parseInt($.browser.version) < 7) ? true : false;



		var speed = options.speed ? options.speed : 0;

		var opacity = options.opacity ? options.opacity : '0';

		var width = options.width ? options.width : 'auto';

		var height = options.height ? options.height : 'auto';

		if (opacity == '0' && $.browser.msie && parseInt($.browser.version) < 8)

		{

			opacity = 0.3;

		}



		var $overlay = null;

		var $wrapper = null;

		var $container = null;

		var $outer = null;

		var $content = null;

		var $title = null;

		var $close = null;

		var $preloader = null;



/**

 * $overlay

 */

		if (options.overlay)

		{

			$overlay = jQuery('<div id="aud_modal_overlay_'+CoolBox._count+'" class="aud_modal_overlay"></div>');

			$overlay

				.css({

					position : 'fixed',

					zIndex : 999,

					top : 0,

					left : 0,

					height : '100%',

					width : '100%',

					backgroundColor : '#000',

					opacity : 0

				});

		}



/**

 * $wrapper

 */

		$wrapper = jQuery('<div id="aud_modal_wrapper_'+CoolBox._count+'" class="aud_modal_wrapper"></div>');

		$wrapper

			.css({

				position : 'fixed',

				width : '100%',

				top : 0,

				left : 0,

				height : $(window).height(),

				zIndex : 999,

				overflow : 'auto'

			})

			.bind('click', function(e)

			{

				if (options.hideOnEsc && !jQuery(e.target).parents().andSelf().filter('#aud_modal_container_'+CoolBox._count).length)

				{

					CoolBox.hide({

						speed : speed,

						afterHide : options.afterHide

					});

					jQuery(this).unbind('click');

				}

			});



/**

 * $container

 */

		$container = jQuery('<div id="aud_modal_container_'+CoolBox._count+'" class="aud_modal_container"></div>');

		$container

			.css({

				position : 'relative',

				opacity : 0,

				padding : '8px',

				backgroundColor : '#FFF',

				'box-shadow' : '0 0 20px #000',

				'-moz-box-shadow' : '0 0 20px #000',

				'-khtml-box-shadow' : '0 0 20px #000',

				'-webkit-box-shadow' : '0 0 20px #000',

				height : 40,

				width : 200,

				overflow : 'hidden'

			});



		if (options.addClass)

		{

			$container.addClass(options.addClass);

		}



		if ($.browser.msie && parseInt($.browser.version) < 9)

		{

			$container.css('border','1px solid #969696');

		}



/**

 * $outer

 */

		$outer = jQuery('<div id="aud_modal_outer_'+CoolBox._count+'" class="aud_modal_outer"></div>');

		$outer.css({

			'float' : 'left',

			position: 'relative',

			padding: '16px 0'

		});

		$container.appendTo($outer);

		$('<div style="clear:both;"></div>').appendTo($outer);



/**

 * $content

 */

		$content = jQuery('<div id="aud_modal_content_'+CoolBox._count+'" class="aud_modal_content"></div>');



		if (options.elem)

		{

			var $elem = jQuery(options.elem);

			if (options.cloneElem)

			{

				$elem.clone(true).appendTo($content);

			}

			else

			{

				$elem.appendTo($content);

			}

		}

		else if (options.html)

		{

			$content.html(options.html);

		}



		if (typeof options.beforeShow == 'function')

		{

			options.beforeShow.call($(this), $content, $container);

		}



		var $preloader = jQuery('<div></div>');



		$content

			.css({

				position: 'relative',

				opacity: 0

			})

			.appendTo($container);



		if (!options.title && options.closeBtn)

		{

			$content.css('margin-top','25px');

		}



		$preloader

			.css({

				'position' : 'relative',

				'height' : 40,

				'width' : 200,

				'background' : 'url(/images_site/wait.gif) center no-repeat'

			})

			.insertBefore($content);



/**

 * $title

 */



		if (options.title)

		{

			$title = jQuery('<h1 id="aud_modal_title_'+CoolBox._count+'" class="aud_modal_title" style="margin-bottom:8px;">'+options.title+'</h1>');



			if (options.titleCss)

			{

				if (typeof options.titleCss == 'string')

				{

					options.titleCss = options.titleCss.replace(/(\s)/g,'');

					var style = options.titleCss.split(';');

					var cssArr = {};

					for (i=0; i<style.length; i++)

					{

						if(/./.test(style[i]))

						{

							var preCss = style[i].split(':');

							cssArr[preCss[0]] = preCss[1];

						}

					}

				}

				else

				{

					var cssArr = options.titleCss;

				}

				$title.css(cssArr);

			}

		}



/**

 * $close

 */

		if (options.closeBtn)

		{

			$close = '<span id="aud_modal_close_'+CoolBox._count+'" class="aud_modal_close">';

			$close += options.closeBtnText ? '<span>'+options.closeBtnText+'</span>' : '';

			$close += '</span>';

			$close = jQuery($close);



			$close

				.css({

					backgroundImage : 'url("/images_site/modal/close.png")',

					backgroundRepeat : 'no-repeat',

					backgroundPosition : 'top right',

					color : '#878684',

					cursor : 'pointer',

					display : 'block',

					fontFamily : 'Tahoma',

					fontSize : '11px',

					height : '18px',

					paddingRight : '19px',

					lineHeight : '16px',

					position : 'absolute',

					right : '8px',

					top : '8px'

				})

				.bind('click', function(){

					CoolBox.hide({

						speed : speed,

						afterHide : options.afterHide

					});

				});



			if (options.closeBtnText)

			{

				$close

					.find('span')

					.css({

						'border-bottom' : '1px dotted',

						'margin-right' : '4px'

					});

			}

		}



/**

 *

 */

		if ($overlay)

		{

			$overlay

				.appendTo($body)

				.animate({

					opacity : opacity

				}, speed);

		}



		$wrapper

			.appendTo($body);



		$outer

			.appendTo($wrapper);



		CoolBox.setPosition($outer);



		$container

			.animate({

				opacity : 1

			}, speed);

/**

 * Показ контента

 */

		var i=0, loaded = 0, $images = $content.find('img');

		if ($images.length)

		{

			var timer = setInterval(function(){

				for(i=0;i<$images.length;i++)

				{

					if($images[i].complete==true)

					{

						loaded++;

						isLoaded(timer, $images.length, loaded);

					}

				}

			},100);

		}

		else

		{

			isLoaded(null , 0, 0);

		}



		if ($images.length > 0 && $content.text() == '' && options.hideOnEsc)

		{

			$images

				.css({

					cursor: 'pointer'

				})

				.click(function(){

					CoolBox.hide();

				});

		}

/**

 * Действие после прогрузки картинок

 */

		function isLoaded(timer, length, loaded)

		{

			if (loaded == length)

			{

				clearInterval(timer);

				if (options.title)

				{

					$title.prependTo($container);

				}

				if (options.closeBtn)

				{

					$close.appendTo($container);

				}



				$container.height(height).width(width);



				CoolBox.setPosition($outer);

				$preloader.remove();

				$content.animate({opacity: 1}, 0, function (){

					if (!options.width && options.maxWidth)

					{

						if (parseInt (options.maxWidth) < $container.width())

						{

							width = parseInt (options.maxWidth);

						}



						$container.width(width);

					}

					else

					{

						if ((!options.height && options.maxHeight))

						{

							if (parseInt (options.maxHeight) < $container.height())

							{

								height = parseInt (options.maxHeight);

							}



							$container.height(height);

						}

					}



					CoolBox.setPosition($outer);

				});



				if (typeof options.afterShow == 'function')

				{

					options.afterShow.call($container, $content);

				}

			}

		}



		// скрываем по нажатию ESC, если не запрещено в настройках

		if (options.hideOnEsc)

		{

			jQuery(document).bind('keyup',function(event){

				if (event.keyCode == 27)

				{

					CoolBox.hide({

						speed : speed,

						afterHide : options.afterHide

					});

				}

			});

		}



		$(window).resize(function(){

			if (jQuery('.aud_modal_container').length > 0)

			{

				CoolBox.setPosition($outer);

			}

		});

	},



	hide : function(options){



		var options = jQuery.extend({

			speed : 300,

			afterHide : function(){}

		},options);



		var $CoolBox = CoolBox._boxes[CoolBox._boxes.length - 1];

		var options = CoolBox._options[CoolBox._options.length - 1];



		if (!options)

		{

			return ;

		}



		var speed = options.speed ? options.speed : 0;

		var $overlay = jQuery('div#aud_modal_overlay_'+CoolBox._count);

		var $wrapper = jQuery('div#aud_modal_wrapper_'+CoolBox._count);



		CoolBox._count = CoolBox._count > 0 ? parseInt(CoolBox._count) - 1 : 0;



		if ($overlay.length)

		{

			$overlay.animate({

				opacity : 0

			}, speed, function(){

				jQuery(this).remove();

			});

		}



		if ($.browser.msie)

		{

			$wrapper.find('img').animate({

				opacity: 0

			}, speed);

		}



		$wrapper.animate({

			opacity : 0

		}, speed, function(){

			jQuery(this).remove();

			if (!CoolBox._count)

			{

				jQuery('body').removeClass('fixed_body');

			}

			if (typeof options.afterHide == 'function')

			{

				options.afterHide.call();

			}

		});

		if (!CoolBox._count)

		{

			CoolBox._exists = false;

		}



		CoolBox._boxes.pop();

		CoolBox._options.pop();

	},



	setPosition : function($outer, speed)

	{

		if ($outer.hasClass('aud_modal_container'))

		{

			$outer = $outer.parents('.aud_modal_outer');

		}

		var $wrapper = jQuery('div.aud_modal_wrapper');



		$wrapper.height($(window).height());



		if ($outer.outerHeight() < $(window).height())

		{

			if (parseInt(speed) > 0)

			{

				$outer.animate({

					top : '50%',

					marginTop : -Math.round($outer.height()/2),

					left : '50%',

					marginLeft : -Math.round($outer.width()/2)

				}, speed);

			}

			else

			{

				$outer.css({

					top : '50%',

					marginTop : -Math.round($outer.height()/2),

					left : '50%',

					marginLeft : -Math.round($outer.width()/2)

				});

			}

			return;

		}



		if (parseInt(speed) > 0)

		{

			$outer.animate({

				top : 0,

				marginTop : 0,

				left : '50%',

				marginLeft : -Math.round($outer.width()/2)

			}, speed);

		}

		else

		{

			$outer.css({

				top : 0,

				marginTop : 0,

				left : '50%',

				marginLeft : -Math.round($outer.width()/2)

			});

		}

	},



	success: function (extra)

	{

		var options = CoolBox._options[CoolBox._options.length - 1];

		if (typeof options.onSuccess == 'function')

		{

			options.onSuccess (extra);

		}

		CoolBox.hide ();

		if (typeof options.afterSuccess == 'function')

		{

			options.afterSuccess (extra);

		}

	}

};