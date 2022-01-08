var FlashUploader = function() {
	return {
        config: function() {
            return {
                'redactor' : {
                    url: '/upload/images/redactor/?param=value',
                    'upload/type': 'one',
                    'upload/image/size/maxWidth': 800,
                    'upload/part': 10,
                    'button/offsetTop': 0,
                    'button/src' : '/Ice/Static/images/site/add_photo.png',
                    'button/height' : 30,
                    'button/center' : 0,
                    'rollContainer/show' : 0,
                    'preview/height': 100,
                    'description/show': 0
                },
                'story' : {
                    url: '/upload/images/zip/',
                    'upload/type': 'many',
                    'upload/image/size/maxWidth': 800,
                    'upload/part': 10,
                    'button/offsetTop': 0,
                    'button/src' : '/Ice/Static/images/flashUploader/flashUploaderButton.png',
                    'button/height' : 26,
                    'button/center' : 0,
                    'rollContainer/offsetTop' : 40,
                    'preview/height': 100,
                    'description/show': 0
                },
                'content' : {
                    'url': '/upload/images/zip/',
                    'upload/type': 'many',
                    'upload/image/size/maxWidth': 800,
                    'upload/part': 10,
                    'button/offsetTop': 0,
                    'button/src' : '/Ice/Static/images/flashUploader/flashUploaderButton.png',
                    'button/height' : 26,
                    'button/center' : 1,
                    'rollContainer/offsetTop' : 40,
                    'preview/height': 100,
                    'description/show': 0
                },
                'comment' : {
                    'url': '/upload/images/zip/',
                    'upload/type': 'many',
                    'upload/image/size/maxWidth': 800,
                    'upload/part': 10,
                    'button/offsetTop': 5,
                    'button/src': '/Ice/Static/images/site/add_photo.png',
                    'button/height': 26,
                    'button/center': 0,
                    'rollContainer/offsetTop' : 40,
                    'preview/height': 100,
                    'description/show': 0
                },
                'commentWall' : {
                    'url': '/upload/images/zip/',
                    'upload/type': 'many',
                    'upload/image/size/maxWidth': 800,
                    'upload/part': 10,
                    'button/offsetTop': 5,
                    'button/src': '/Ice/Static/images/site/add_photo.png',
                    'button/height': 26,
                    'button/center': 0,
                    'rollContainer/offsetTop' : 40,
                    'preview/height': 60,
                    'description/show': 0
                },
                'album': {
                    url: '/upload/images/zip/',
                    'upload/type': 'many',
                    'upload/image/size/maxWidth': 800,
                    'upload/part': 10,
                    'button/offsetTop': 0,
                    'button/src' : '/Ice/Static/images/flashUploader/flashUploaderButton.png',
                    'button/height' : 26,
                    'button/center' : 1,
                    'rollContainer/offsetTop' : 40,
                    'rollContainer/offsetLeft' : 20,
                    'preview/width': 90,
                    'preview/height': 50,
                    'description/show': 0
                }
            };
        },
		$container : null,
		id: null,
        inputParams: null,
		options: null,
		count: 0,
		data : new Array(),
        hasFlash: false,
		uploadCallback: function() {},
        upCallback: function() {},
        loaded: [],

        getUnic: function()
        {
            var prefix = Math.random();
			return String(prefix).replace('0.', '');
        },

		init: function(nameController, $container, nameTemplate, params) {
			this.initialize(nameController, $container, this.config()[nameTemplate], params);
		},

        initFlash: function()
        {
            var text = '<a target="_blank" href="http://get.adobe.com/flashplayer/">Установите Adobe Flash Player</a>';
            this.$container.append(
				'<div id="'+this.id+'">'+text+'</div>');
			swfobject.embedSWF(
				'/Ice/Static/flash/iceuploader.swf',
				this.id,
				'100%',
				'100%',
				"9.0.0",
				"/Ice/includes/expressInstall.swf",
				this.options,
				{wmode: "transparent"}
			);
			this.$container.height(this.options['button/height']+this.options['button/offsetTop']);

			this.$container.append('<div class="ice_uploader_info">');
            if (this.options['upload/type'] == 'one') {
                this.oneInit();
            }
        },

        initJs: function()
        {
            var $this = this, html;
            View_Render.assign({
                'id':   this.id
            });
            html = View_Render.fetch('Flash/Uploader/js.tpl');
            this.$container.html(html);
            var $container = $('#' + this.id), fileId = null;
            $('.attachImageBtn', $container).click(function() {
                fileId = $this.getUnic() + '_file';
                var $form = $('.formContainer', $container);
                $form.append('<input type="file" name="file[]" id="' + fileId +
                    '" />');
                var $object = $('#' + fileId);
                $object.trigger('click');
                $object.bind('change', function() {
                    var url = $(this).val();
                    if (url.length) {
                        $this.loaded.push({
                            'id':       fileId
                        });
                        $this.uploadJs($(this), fileId);
                    }
                });
            });
        },

		initialize: function(nameController, $container, flashOptions, params) {
//			Loader.load('includes_swfobject', 'ice');
            this.$container = $container;
			this.options = flashOptions;
            this.inputParams = params;
			this.options.jsControllerName = nameController;
			if (params) {
				var gets = '?';
				for(var key in params) {
					gets += key+'='+params[key]+'&';
				}
				this.options['url'] = this.options['url'] + gets;
			}
			this.id = this.getUnic() + '_flash';
			if (swfobject.hasFlashPlayerVersion('9.0.18')) {
                this.hasFlash = true;
            }
            if (this.hasFlash) {
                this.initFlash();
                return;
            }
            this.initJs();

		},
		onChangeHeight: function(height) {
			var h;
			h = height > 0 ? this.options['rollContainer/offsetTop']+height :
				this.options['button/height']+this.options['button/offsetTop'];
			this.$container.height(h);
		},
		upload: function(callback) {
			this.data = new Array();
			this.upCallback = callback;
			if (this.count) {
				document[this.id].upload();
			} else {
				this.upCallback();
			}
		},

        uploadJs: function($file, id)
        {
            var $this = this,
                $uploadedContainer = $('.uploadedContainer', $this.$container);
            function callback(result) {
                $uploadedContainer.append('<li class="download_img" key="' + id + '">\
                    <img src="' + result.data.result.smallUrl + '" style="opacity: 1;">\
                    <div key="' + result.data.result.id + '" class="delete imageDeleteBtn"></div>\
                </li>');
            }
            Controller.call(
                'Uploader/upload',
                {
                    'utcode':   $this.inputParams['utcode'],
                    'file':     $file[0]
                },
                callback,
                true
            );
        },

		started: function() {
			this.$container.find('.ice_uploader_info').html('Идет загрузка на сервер...');
		},
		onProgress: function(progress) {
			//console.log(progress);
			//this.$container.find('.ice_uploader_info').html('Загружено ('+progress+'%)');
		},
		onComplete: function(count) {
			if (count==0) {
				this.$container.find('.ice_uploader_info').html('Загрузка успешно завершена');
				this.upCallback(this.data);
			}
		},
		onCompleteData: function(data) {
			var tmp = $.parseJSON(data);
			this.data = this.data.concat(tmp);
		},
		onError: function(e) {
			console.log(e);
		},
		onSError: function(e) {
			console.log(e);
		},
		onChangeImageCount: function(count) {
			this.count = count;
            this.callbackOnChangeImageCount(count);
		},
        callbackOnChangeImageCount: function() {

        },
		onChangeImagesSize: function(size) {
			this.size = size;
			if (!this.size) {
				this.$container.find('.ice_uploader_info').html('');
			} else {
				this.$container.find('.ice_uploader_info').html('Изображений: '+this.count+' ('+this.size+'MB)');
			}
		},
		onPrepareProcess: function() {
			this.$container.find('.ice_uploader_info').html('Идет подготовка...');
		},
		onPrepareComplete: function() {
			this.$container.find('.ice_uploader_info').html('');
		},
        oneInit: function() {
            var $this = this;
            var f = function(count) {
                $this.count = count;
                if (count>0) {
                    this.upload(function(data) {
                       $this.uploadCallback(data);
                       $this.onChangeImageCount = f;
                    });
                    this.onChangeImageCount = function(count) {
                        $this.count = count;
                    };
                }
            };
            this.onChangeImageCount = f;
        }
	};
};