/**
 * @description options = {
				data: {
					'utcode': ...
				},
				onUploadComplete: function(result)
				{
					...
				},
				onCheckFilesCount: function(result)
				{
					$this.isImageUpload = Boolean(result.count);
				}
			}
 */
jQuery.fn.flashUploader = function(options){
    var options = jQuery.extend({
		uploadScript : '/image/',
		swfFile : '/Ice/Static/flash/uploader.swf',
		data : null, // {'key':'value','key2':'value2'}
		width : '',
		height : '',
		onInit : function(result){},
		onStartUpload : function(result){},
		onCancelUpload : function(result){},
		onFileLoadComplete : function(result){},
		onUploadComplete : function(result){},
		onCheckFilesCount : function(result) {},
		onError : function(result) {}   // {type : onByteLoadError или onFileLoadError или onHttpError , 'fileName' - название файла}
    },options);

	Controller_Flash_Uploader.uploaderCount++;

    return this.each(function(){
		var id = jQuery(this).attr('id');

		jQuery(this).html('<div id="'+id+'_inner"></div>');

		var flashvars = {};

		if (options.data)
		{
			for (var key in options.data)
			{
				flashvars[key] = options.data[key];
			}
		}

		flashvars.xmlConfig = "/Ice/Static/flash/uploader_config.xml";
		flashvars.areaID = id;
		flashvars.uploadScript = options.uploadScript;

		var width = options.width ? options.width : '100%';
		var height = options.height ? options.height : '100%';

		swfobject.embedSWF(options.swfFile, id+'_inner', width, height, "8.0.0","",flashvars,{wmode: "transparent", menu:"false", quality: "high", scale: "noscale", bgcolor: "#F0EFEC", allowScriptAccess: "always"}, {id:'aura', name:'aura', style:'visibility:visible !important;'});

		jQuery(this)
			.bind('onInit', {'action': options.onInit}, function(event, data) {
				options.onInit.call(this, data);
			})
			.bind('onStartUpload', {'action': options.onStartUpload}, function(event, data) {
				options.onStartUpload.call(this, data);
			})
			.bind('onCancelUpload', {'action': options.onCancelUpload}, function(event, data) {
				options.onCancelUpload.call(this, data);
			})
			.bind('onFileLoadComplete', {'action': options.onFileLoadComplete}, function(event, data) {
				options.onFileLoadComplete.call(this, data);
			})
			.bind('onUploadComplete', {'action': options.onUploadComplete}, function(event, data) {
				options.onUploadComplete.call(this, data);
			})
			.bind('onCheckFilesCount', {'action': options.onCheckFilesCount}, function(event, data) {
				options.onCheckFilesCount.call(this, data);
			})
			.bind('onError', {'action': options.onError}, function(event, data) {
				alert('Произошла ошибка связи или файл не является изображением. Проверьте и повторите попытку снова.');
				options.onError.call(this, data);
			});
    });
};

jQuery.fn.flashButtonUploader = function(options){
    var options = jQuery.extend({
		uploadScript: '/image/useravatar/',
		buttonImage: '/Ice/Static/images/site/avatar/avatar.png',
		swfFile : '/Ice/Static/flash/ButtonUploader.swf',
		browseFilterName : 'Images',
		browseFilterTypes : '*.jpg;*.jpeg;*.png;*.gif',
		width : 134,
		height : 91,
		imageSize : '800x800',
		data : null, // {'key':'value','key2':'value2'}
		isCrop : false,
		scaleX : 114,
		scaleY : 69,
		aspectRatio : '114:69',
		template : 'avatar',
		onInit : function(){},
		onComplete : function(data){},
		onError : function(data) {},
		onProgress : function(data){},
		onButtonConstruct : function(){}
    },options);

    return this.each(function(){
		var id = jQuery(this).attr('id');

		jQuery(this).css({
			'position' : 'relative'
		});

		//jQuery('<div id="'+id+'_inner"></div>').prependTo(jQuery(this));
		jQuery(this).html('<div id="'+id+'_inner"></div>');

		var parts = '';
		var flashvars = {};
		var style = '';
		style += options.width ? 'width:'+options.width+'px;' : 'width:100%;';
		style += options.height ? 'height:'+options.height+'px;' : 'height:100%;';

		var uploadScript = options.uploadScript.split('&');
		for (var i=1; i<uploadScript.length;i++)
		{
			part = uploadScript[i].split('=');
			parts += ','+part[0]+'='+part[1];
		}

		if (parts)
		{
			flashvars.datasend = parts;
		}
		flashvars.uploadScript=options.uploadScript;
		flashvars.browseFilterName = options.browseFilterName;
		flashvars.browseFilterTypes = options.browseFilterTypes;
		flashvars.imageSize = options.imageSize;
		if (options.buttonImage)
		{
			flashvars.buttonImage = options.buttonImage;
		}
		flashvars.areaID = id;

		if (options.width)
		{
			flashvars.width = options.width;
			jQuery(this).width(options.width);
		}
		if (options.height)
		{
			style += 'height:'+options.height+'px';
			flashvars.height = options.height;
			jQuery(this).height(options.height);
		}

		if (options.data)
		{
			for (var key in options.data)
			{
				flashvars[key] = options.data[key];
			}
		}

		var width = !options.width ? '100%' : options.width;
		var height = !options.height ? '100%' : options.height;

		swfobject.embedSWF(options.swfFile, id+'_inner', width, height, "8.0.0","",flashvars,{wmode: "transparent", menu:"false", quality: "high", scale: "noscale", /*bgcolor: "#F0F0F0",*/ allowScriptAccess: "always"}, {id:'auraButton', name:'auraButton', style: style});
		jQuery(this)
			.bind('onError', {'action': options.onError}, function(event, data) {
				alert('Произошла ошибка связи или файл не является изображением. Проверьте и повторите попытку снова.');
				options.onError.call(this, data);
			})
			.bind('onInit', {'action': options.onInit}, function(event) {
				options.onInit.call(this);
			})
			.bind('onComplete', {'action': options.onComplete}, function(event, data) {

				var $this = this;
				if (!options.isCrop) {
					options.onComplete.call($this, data);
					return;
				}

				var $scaleX = options.scaleX;
				var $scaleY = options.scaleY;

				var dt = eval('('+data+')');
				View_Render.assign('width', $scaleX);
				View_Render.assign('height', $scaleY);
				View_Render.assign('src', dt.largeUrl);

				Helper_Dialog_Modal.confirm ({
					title: 'Выберите область на фотографии, которая будет отображаться в миниатюрах на сайте.',
					text: View_Render.fetch ('js/Controller/Crop/'+options.template+'.tpl'),
					width: '695px',
					multi: true,
					hideOnEsc: false,
					afterShow: function ($container, $content) {

						 var $img = $container.find('#image_to_crop');
						 $img.parents('.dlg_window').find('span.close').hide();

						 $('input[name=width]').val($img.width());
						 $('input[name=height]').val($img.height());

						 var wh = $img.width();
						 var ht = Math.round(wh*$scaleY/$scaleX);
						 if ($img.height()<ht)
						 {
							 ht = $img.height();
							 wh = Math.round($scaleX/$scaleY*ht);
						 }

						 var scaleX = $scaleX / (wh || 1);
						 var scaleY = $scaleY / (ht || 1);

						$('input[name=x1]').val(0);
						$('input[name=y1]').val(0);
						$('input[name=x2]').val(wh);
						$('input[name=y2]').val(ht);

						$('#image_preview').css({
							width: Math.round(scaleX * $img.width()) + 'px',
							height: Math.round(scaleY * $img.height()) + 'px'
						});

						 $img.imgAreaSelect({
							 x1: 0,
							 y1: 0,
							 x2: wh,
							 y2: ht,
							 aspectRatio: options.aspectRatio,
							 handles: true,
							 parent: $img.parents('#container_crop'),
							 minWidth: $scaleX,
							 minHeight: $scaleY,
							 movable: true,
							 onSelectChange: function (img, selection) {
								$('input[name=x1]').val(selection.x1);
								$('input[name=y1]').val(selection.y1);
								$('input[name=x2]').val(selection.x2);
								$('input[name=y2]').val(selection.y2);

								var scaleX = $scaleX / (selection.width || 1);
								var scaleY = $scaleY / (selection.height || 1);

								$('#image_preview').css({
									width: Math.round(scaleX * $img.width()) + 'px',
									height: Math.round(scaleY * $img.height()) + 'px',
									marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px',
									marginTop: '-' + Math.round(scaleY * selection.y1) + 'px'
								});
							},
							onInit: function () {

							}
						});
					},
					afterHide : function () {
						options.onComplete.call($this, dt);
					}
				});
			})
			.bind('onProgress', {'action': options.onProgress}, function(event, data) {
				options.onProgress.call(this, data);
			})
			.bind('onButtonConstruct', {'action': options.onButtonConstruct}, function(event) {
				options.onButtonConstruct.call(this);
			});
		return;
    });
};