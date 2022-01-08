/*************** FILES UPLOAD *****************/
jQuery.fn.filesUpload = function(options)
{
	var options = jQuery.extend({
		extensions: 'jpg|jpeg|gif|png' // допустимые типы файлов, задаются как jpg|gif|swf
		,actionUrl: '/ajax/index.php?mode=filesUpload' // адрес к обработчику загружаемых файлов
		,container: '.fileUpload' // контейнер кнопки загрузки файлов
		,filesPreviewContainer: '#filesPreviewContainer' // контейнер для предпросмотра загруженных файлов
		,fileName: 'file' // аттрибут `name` input'а файла
		,filesLimit: false // лимит количества загружаемых файлов
		,filesLimitShow: false // показывать количество файлов, которые можно добавить
		,filesTmpDir: false // папка для временных файлов
		,maxWeight: false // максимальный размер файла в кб, 1024 кб = 1Мб
		,fileHeight: '80' // высота файла в px
		,fileWidth: '120' // ширина файла в px
		,hideButton: false // если true кнопка добавления фотографии будет скрываться полностью, иначе становиться полупрозрачной
		,preloader: '/images/loader.gif' // путь к картинке прелоадера. ПОКА НЕ МЕНЯТЬ!!!
		,append: false // если false, то картинки добавляются в обратном порядке
		,onSubmit : function () {}
		,onComplete : function (data) {}
	},options);
	var url = options.actionUrl;
	var containerWidth = '120';
	var containerHeight = '80';
	if ((options.filesLimit && options.filesLimit !=='') && (options.filesLimitShow && options.filesLimitShow !==''))
	{
		$('<div id="filesCount">Можно загрузить:&nbsp;<span>'+options.filesLimit+'</span></div>').insertBefore(options.container);
	}
	if (options.extensions && options.extensions !=='')
	{
		url += '&ext='+options.extensions;
	}
	if (options.filesTmpDir && options.filesTmpDir !=='')
	{
		url += '&tmpDir='+ options.filesTmpDir;
	}
	if (options.maxWeight && options.maxWeight !=='')
	{
		url += '&maxWeight='+ options.maxWeight;
	}
	if (options.fileWidth && options.fileWidth !=='')
	{
		url += '&fileWidth='+ options.fileWidth;
		var containerWidth = options.fileWidth;
	}
	if (options.fileHeight && options.fileHeight !=='')
	{
		url += '&fileHeight='+ options.fileHeight;
		var containerHeight = options.fileHeight;
	}

	var $button = $(this);

	return this.each(function(){
		var button = $(this), interval;

		$.file_upload(button, {
			action : url,
			name : options.fileName,
			onSubmit : function(file, ext) {
				options.onSubmit.call(this);
				$('#fileUploadError').remove();
				if (options.extensions)
				{
					var reg = new RegExp('^('+options.extensions+')$','i');

					if (!(ext && reg.test(ext)))
					{
						$('<div><p id="fileUploadError" style="border:none;float:none;">Файл имеет недопустимое расширение</p></div>').insertBefore(options.filesPreviewContainer);
						return false;
					}
				}
				if (options.append)
				{
					$('<div id="fileUploadError" style="width:'+containerWidth+'px;height:'+containerHeight+'px; background-image: url('+ options.preloader +');"></div>').appendTo(options.filesPreviewContainer);
				}
				else
				{
					$('<div id="fileUploadError" style="width:'+containerWidth+'px;height:'+containerHeight+'px; background-image: url('+ options.preloader +');"></div>').prependTo(options.filesPreviewContainer);
				}
				if ($button.length == 1 && options.filesLimit == 1)
				{
					if (!options.hideButton && $(options.container).find('img').length > 0)
					{
						$(options.container).addClass('inactive').find('img').animate({opacity: 0.5}, 100);
					}
					else
					{
						$(options.container).addClass('inactive').hide();
					}
				}
				//this.disable();
			},
			onComplete : function(file, response, success) {
				options.onComplete.call(this, response);
				$('#fileUploadError').remove();
				if (success !== 'success')
				{
					if (!options.hideButton && $(options.container).find('img').length > 0)
					{
						$(options.container).removeClass('inactive').find('img').animate({opacity:'1'}, 100);
					}
					else
					{
						$(options.container).show();
					}
					$('<div>' + response + '</div>').insertBefore(options.filesPreviewContainer);
					//this.enable();
				}
				else
				{
					if (options.append)
					{
						$('<div class="fileResponse">' + response + '</div>')
							.appendTo(options.filesPreviewContainer)
							.find('img')
							.animate({opacity: 'show'}, 700);
					}
					else
					{
						$('<div class="fileResponse">' + response + '</div>')
							.prependTo(options.filesPreviewContainer)
							.find('img')
							.animate({opacity: 'show'}, 700);
					}

					//this.enable();
					var knopka = this;
					$(options.filesPreviewContainer).find('.fileDelete span').click(function(){
						var imgSmall = $(this).parent().parent().find('.filePreview').attr('imgSmall');
						var imgBig = $(this).parent().parent().find('.filePreview').attr('imgBig');
						var thisContainer = $(this).parent().parent();
						thisContainer.find('img').animate({opacity: 'hide'}, 500,
							function()
							{
								thisContainer.remove();

								knopka.enable();
								if ($(options.container).hasClass('inactive'))
								{
									if (!options.hideButton && $(options.container).find('img').length > 0)
									{
										$(options.container).removeClass('inactive').find('img').animate({opacity:'1'}, 100);
									}
									else
									{
										$(options.container).show();
									}

									$(options.container+' *').css('cursor','pointer');
								}
								/*if ($(options.container).is(':hidden'))
								{
									$(options.container).slideDown(100);
								}*/

								$.post(options.actionUrl+'&del', {small: imgSmall, big: imgBig});

								if (options.filesLimit)
								{
									var newCount = $(options.filesPreviewContainer).find('.fileResponse').length;
									if (options.filesLimitShow)
									{
										$('#filesCount span').html((options.filesLimit-newCount));
									}

									$(options.container).find('*[count='+(newCount+1)+']:hidden').show();
								}
							}
						);
					});
					if (options.filesLimit)
					{
						var count = $(options.filesPreviewContainer).find('.fileResponse').length;
						if (options.filesLimitShow)
						{
							var filesCount = options.filesLimit-count;
							$('#filesCount span').html(filesCount);
						}
						if (count == options.filesLimit)
						{
							//knopka.disable();
							//$(options.container).slideUp(100);

							if (!options.hideButton && $(options.container).find('img').length > 0)
							{
								$(options.container).addClass('inactive').find('img').animate({opacity: 0.5}, 100);
							}
							else
							{
								$(options.container).addClass('inactive').hide();
							}

							$(options.container+' *').css('cursor','default !important');
						}
						else
						{
							var count = $(options.filesPreviewContainer).find('.fileResponse').length;
							var fileInput = $(options.container).find('#fileInput').length;
							if (fileInput > count)
							{
								$(options.container).find('#fileWrapper:visible:last').attr('count',count).hide();
							}
						}
					}
				}
			}
		});
	});
};

(function($){
	if ( ! $) return;

	$.file_upload = function(button, options){
		button = $(button);

		if (button.length != 1 ){
			//console.error('You passed ', button.size(),' elements to ajax_upload at once');
			return false;
		}

		return new File_upload(button, options);

	};


	var get_uid = function(){
		var uid = 0;
		return function(){
			return uid++;
		};
	}();

	var File_upload = function(button, options){
		this.button = button;

		this.wrapper = null;
		this.form = null;
		this.input = null;
		this.iframe = null;

		this.disabled = false;
		this.submitting = false;

		this.settings = {
			action: 'upload.php',
			name: 'userfile',
			data: {},
			onSubmit: function(file, extension) {},
			onComplete: function(file, response, success, error) {},
			onSuccess: function(file, response){},
			onError: function(file, response){}
		};
		$.extend(this.settings, options);

		this.create_wrapper();
		this.create_input();

		/*if (jQuery.browser.msie){
			this.make_parent_opaque();
		}*/
		this.create_iframe();

	};

	File_upload.prototype = {
		set_data : function(data){
			this.settings.data = data;
		},
		disable : function(){
			this.disabled = true;
			if ( ! this.submitting){
				this.input.attr('disabled', true);
			}
		},
		enable : function(){
			this.disabled = false;
			this.input.attr('disabled', false);
		},
		create_wrapper : function(){
			var button = this.button, wrapper;

			wrapper = this.wrapper = $('<div id="fileWrapper"></div>')
				.insertAfter(button)
				.append(button);

			setTimeout(function(){
				var height = button.outerHeight(true) > 0 ? button.outerHeight(true) : 'auto';
				var width = button.outerWidth(true) > 0 ? button.outerWidth(true) : 'auto';
				wrapper.css({
					position: 'relative'
					,display: 'block'
					,overflow: 'hidden'
					,cursor: 'pointer'
					/*,height: height
					,width: width*/
				});
			}, 1);

			var self = this;
			wrapper.mousemove(function(e){
				if (!self.input) {
					return;
				}

				self.input.css({
					top: e.pageY - wrapper.offset().top - 5 + 'px'
					,left: e.pageX - wrapper.offset().left - 170 + 'px'
				});
			});
		},
		create_input : function(){
			var self = this;

			this.input =
				$('<input type="file" id="fileInput"/>')
				.attr('name', this.settings.name)
				.css({
					'position' : 'absolute'
					,'margin': 0
					,'padding': 0
					,'width': '220px'
					,'heigth': '10px'
					,'opacity': 0.0
					,'cursor': 'pointer'
				})
				.change(function(){
					if ($(this).val() == ''){
						return;
					}

					self.submitting = true;

					self.submit();

					self.submitting = false;
				})
				.appendTo(this.wrapper)

				//
				.hover(
					function(){self.button.addClass('hover');}
					,function(){self.button.removeClass('hover');}
				);

			if (this.disabled){
				this.input.attr('disabled', true);
			}

		},
		create_iframe : function(){
			var name = 'iframe_au' + get_uid();

			this.iframe =
				$('<iframe name="' + name + '"></iframe>')
				.css('display', 'none')
				.appendTo('body');

		},
		submit : function(){
			var self = this, settings = this.settings;

			var file = this.file_from_path(this.input.val());

			if (settings.onSubmit.call(this, file, this.get_ext(file)) === false){
				if (self.disabled){
					this.input.attr('disabled', true);
				}
				return;
			}

			this.create_form();
			this.input.appendTo(this.form);
			this.form.submit();

			this.input.remove();this.input = null;
			this.form.remove();this.form = null;

			this.submitting = false;

			this.create_input();

			var iframe = this.iframe;

			iframe.load(function(){

				var response = iframe.contents().find('body').html();
				var success = iframe.contents().find('body').find('span#success').text();
				var error = iframe.contents().find('body').find('#error');

				settings.onComplete.call(self, file, response, success, error);
				if (success == 'success'){
					settings.onSuccess.call(self, file, response);
				} else {
					settings.onError.call(self, file, response);
				}

				setTimeout(function(){
					iframe.remove();
				}, 1);
			});

			this.create_iframe();
		},
		create_form : function(){
			this.form =
				$('<form method="post" enctype="multipart/form-data"></form>')
				.appendTo('body')
				.attr({
					"action" : this.settings.action
					,"target" : this.iframe.attr('name')
				});

			for (var i in this.settings.data){
				$('<input type="hidden" />')
					.appendTo(this.form)
					.attr({
						'name': i
						,'value': this.settings.data[i]
					});
			}
		},
		file_from_path : function(file){
			var i = file.lastIndexOf('\\');
			if (i !== -1 ){
				return file.slice(i+1);
			}
			return file;
		},
		get_ext : function(file){
			var i = file.lastIndexOf('.');

			if (i !== -1 ){
				return file.slice(i+1);
			}
			return '';
		},
		make_parent_opaque : function(){
			this.button.add(this.button.parents()).each(function(){
				var color = $(this).css('backgroundColor');
				var image = $(this).css('backgroundImage');

				if ( color != 'transparent' ||  image != 'none'){
					$(this).css('opacity', 1);
					return false;
				}
			});
		}

	};
})(jQuery);

/*************** END FILES UPLOAD *****************/