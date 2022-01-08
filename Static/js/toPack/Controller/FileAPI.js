/**
 * Контроллер загрузчика фото через fileAPI2.0
 *
 * @link https://www.npmjs.com/package/jquery.fileapi/v/0.3.1 некоторая документация
 */
var Controller_FileAPI = {

    /**
     * Инициализация
     *
     * @param data
     * @returns {*}
     */
    init: function(data) {
        if (!window.FileAPI) {
            window.FileAPI = {
                debug: false,
                staticPath: '/Static/js/noConflict/includes/Uploader/FileAPI/'
            };
        }
        return this.newInstance(data).init();
    },

    /**
     * Инициализация Uploader'а
     *
     * @param utcode            TempContent ID
     * @param containerSelector CSS-селектор элемента интерфейса, в котором требуется инициализировать Uploader
     * @param templateName      Имя шаблона
     * @returns {*}
     */
    initUploader: function(utcode, containerSelector, templateName) {
        return this.init({
            container: $(containerSelector),
            template: templateName,
            params: {
                utcode: utcode
            }
        });
    },

    /**
     * Получить новый экземпляр загрузчика
     * @param data
     * @returns {{container: *, init: (function(): instance), strategies: {single: {init: init}, crop: {init: init}, multi: {init: init}}, upload: upload, onFileComplete: onFileComplete, onCompleteCallback: onCompleteCallback, onComplete: onComplete, clear: clear, params: *, onSelect: (function(*, *): boolean), currentResponse: {}, fileapi: *, options: *, onUpload: onUpload, responses: [], onFileCompleteCallback: onFileCompleteCallback, onUploadCallback: onUploadCallback, config: {clinicLogo: {preview: {width: number, height: number}, single: boolean, tpl: string, autoload: boolean, url: string}, redactor: {single: boolean, tpl: string, url: string}, blank: {single: boolean, tpl: string, autoload: boolean, url: string}, clinicRegistration: {preview: {width: number, height: number}, tpl: string, autoload: boolean, url: string}, admin: {preview: {width: number, height: number}, tpl: string, autoload: boolean, url: string}, clinicComment: {preview: {width: number, height: number}, tpl: string, autoload: boolean, url: string}, clinicMedLicence: {preview: {width: number, height: number}, single: boolean, tpl: string, autoload: boolean, url: string}, article: {single: boolean, tpl: string, url: string}, doctor: {preview: {width: number, height: number}, tpl: string, autoload: boolean, url: string}, feedback: {preview: {width: number, height: number}, tpl: string, autoload: boolean, url: string}, comment: {preview: {width: number, height: number}, tpl: string, autoload: boolean, url: string}, cabinetClinicAddImage: {single: boolean, tpl: string, autoload: boolean, url: string}, clinic: {preview: {width: number, height: number}, tpl: string, autoload: boolean, url: string}}, getFileapi: (function(): *), urlPrepare: (function(*, *=): string)}}
     */
    newInstance: function(data) {
        var instance = {
            strategies: {
                single: {
                    init: function(params) {
                        View_Render.assign(params);
                        var html = View_Render.fetch('includes/FileAPI/tpl/front/single.tpl');
                        instance.container.append(html);
                        let origOnUpload = instance.onUpload;
                        let origFileComplete = instance.onFileComplete;
                        instance.onUpload = (result, xhr) => {
                            $(instance.container).find('.js-fileapi-visibleWithFiles').removeClass('hidden');
                            instance.container.find('.js-fileapi-hideOnComplete').removeClass('hidden');
                            origOnUpload(result, xhr);
                        };
                        instance.onFileComplete = () => {
                            instance.container.find('.js-fileapi-hideOnComplete').addClass('hidden');
                            origFileComplete();
                        };
                        instance.container.on('click', '.js-remove', () => {
                            $(instance.container).find('.js-fileapi-visibleWithFiles').addClass('hidden');
                            instance.clear();
                        });
                        $(instance.container).find('.js-fileapi-visibleWithFiles').addClass('hidden');
                        instance.container.fileapi({
                            autoUpload: true,
                            duplicate: false,
                            multiple: false,
                            url: params.url,
                            maxSize: 20 * FileAPI.MB,
                            onComplete: instance.onComplete,
                            onFileComplete: instance.onFileComplete,
                            onFileUpload: instance.onUpload,
                            accept: params.accept,
                            onSelect: function(evt, ui) {
                                return instance.onSelect(evt, ui);
                            },
                            elements: {
                                size: '.js-size',
                                progress: '.js-progress',
                                active: {
                                    show: '.js-upload',
                                    hide: '.js-browse',
                                },
                                preview: {
                                    el: '.js-preview',
                                    width: instance.options.preview
                                        ? instance.options.preview.width
                                        : null,
                                    height: instance.options.preview
                                        ? instance.options.preview.height
                                        : null
                                },
                            }
                        });
                    }
                },
                multi: {
                    init: function(params) {
                        View_Render.assign(params);
                        var html = View_Render.fetch('includes/FileAPI/tpl/front/multi.tpl');
                        instance.container.append(html);
                        instance.container.fileapi({
                            autoUpload: instance.options.autoload,
                            multiple: true,
                            onComplete: instance.onComplete,
                            onUpload: instance.onUpload,
                            accept: params.accept,
                            onSelect: function(evt, ui) {
                                return instance.onSelect(evt, ui);
                            },
                            maxSize: 20 * FileAPI.MB,
                            imageTransform: {
                                maxWidth: 1200,
                                maxHeight: 1600
                            },
                            elements: {
                                ctrl: {
                                    upload: '.js-upload',
                                },
                                empty: {show: '.b-upload__hint'},
                                emptyQueue: {hide: '.js-upload'},
                                list: '.js-files',
                                file: {
                                    tpl: '.js-file-tpl',
                                    preview: {
                                        el: '.b-thumb__preview',
                                        width: instance.options.preview.width,
                                        height: instance.options.preview.height
                                    },
                                    upload: {
                                        show: '.progress',
                                        hide: '.b-thumb__rotate'
                                    },
                                    complete: {hide: '.progress'},
                                    progress: '.progress .bar'
                                }
                            }
                        });
                    }
                },
                crop: {
                    init: function(params) {
                        instance.coords = {};
                        View_Render.assign(params);
                        var html = View_Render.fetch('includes/FileAPI/tpl/front/crop.tpl');
                        instance.container.append(html);
                        instance.container.fileapi({
                            url: params.url,
                            onComplete: instance.onComplete,
                            maxSize: 20 * FileAPI.MB,
                            duplicate: true,
                            imageSize: { 
                                minWidth: instance.options.preview.width, 
                                minHeight: instance.options.preview.height 
                            },
                            elements: {                           
                               preview: {
                                  el: '.js-preview',
                                  width: instance.options.preview.width,
                                  height: instance.options.preview.height
                               },
                               progress: '.js-progress'
                            },
                            accept: params.accept,
                            onSelect: function (evt, ui) {
                               instance.file = ui.files[0];
                               if (instance.file) {
                                  $('#popup').modal({
                                     closeOnEsc: true,
                                     closeOnOverlayClick: false,
                                     onOpen: function (overlay) {
                                        $(overlay).on('click', '.close_form', function() {
                                            $.modal().close();
                                        });
                                        $(overlay).on('click', '.js-upload', function() {
                                           $.modal().close();
                                           instance.container.fileapi('upload'); 
                                        });
                                        $('.js-img', overlay).cropper({
                                           file: instance.file,
                                           bgColor: '#fff',
                                           maxSize: [$(window).width()-200, $(window).height()-200],
                                           minSize: [instance.options.preview.width, instance.options.preview.height],
                                           selection: '90%',
                                           onSelect: function (coords) {
                                              instance.coords = coords; 
                                           }
                                        });
                                     }
                                  }).open();
                               }
                            }
                        });        
                    }
                }
            },
            config: {
                doctor: {
                    url: '/upload/images/',
                    tpl: 'doctor',
                    autoload: false,
                    preview: {
                        height: 100,
                        width: 150
                    }
                },
                admin: {
                    url: '/upload/images/',
                    tpl: 'admin',
                    autoload: false,
                    preview: {
                        height: 100,
                        width: 150
                    }
                },
                clinicMedLicence: {
                    url: '/upload/images/',
                    tpl: 'redactor',
                    autoload: true,
                    preview: {
                        height: 100,
                        width: 150
                    },
                    single: true
                },
                clinicLogo: {
                    url: '/upload/images/',
                    tpl: 'redactor',
                    autoload: true,
                    preview: {
                        height: 100,
                        width: 150
                    },
                    single: true
                },
                article: {
                    url: '/upload/images/',
                    tpl: 'article',
                    single: true
                },
                redactor: {
                    url: '/upload/images/redactor/fileapi/',
                    tpl: 'redactor',
                    single: true
                },
		        feedback: {
                    url: '/upload/images/',
                    tpl: 'feedback',
                    autoload: false,
                    preview: {
                        height: 100,
                        width: 150
                    }
                },
                clinic: {
                    url: '/upload/images/',
                    tpl: 'clinic',
                    autoload: false,
                    preview: {
                        height: 100,
                        width: 150
                    }
                },
                blank: {
                    url: '/upload/images/',
                    tpl: 'blank',
                    autoload: false,
                    single: true
                },
                comment: {
                    url: '/upload/images/',
                    tpl: 'comment',
                    autoload: false,
                    preview: {
                        height: 100,
                        width: 150
                    }
                },
                clinicComment: {
                    url: '/upload/images/',
                    tpl: 'clinicComment',
                    autoload: true,
                    preview: {
                        height: 100,
                        width: 150
                    }
                },
                clinicRegistration: {
                    url: '/upload/images/',
                    tpl: 'clinicRegistration',
                    autoload: true,
                    single: true,
                    preview: {
                        height: 100,
                        width: 150
                    }
                },
                cabinetClinicAddImage: {
                    url: '/upload/images/',
                    tpl: 'cabinetClinicAddImage',
                    autoload: true,
                    single: true,
                    onComplete: function () {
                        if (data.onComplete) {
                            data.onComplete(arguments);
                        }
                    }
                },
                cabinetClinicDiscountForm: {
                    url: '/upload/images/',
                    tpl: 'cabinetClinicDiscountForm',
                    autoload: false,
                    single: true,
                    preview: {
                        height: 360,
                        width: 360,
                    }
                },
                adminDiscountCover: {
                    url: '/upload/images/',
                    tpl: 'adminDiscountCover',
                    autoload: true,
                    single: true,
                    preview: {
                        height: 0,
                        width: 0,
                    }
                },
                cabinetDoctorAvatar: {
                    url: '/upload/images/',
                    tpl: 'cabinetDoctorAvatar',
                    autoload: true,
                    single: true,
                },
                cabinetDoctorAwards: {
                    url: '/upload/images/',
                    tpl: 'cabinetDoctorAwards',
                    autoload: true,
                    single: true,
                },
            },
            container: data.container,
            options: undefined,
            params: data.params,
            fileapi: undefined,

            /**
             * Ответы сервера на загрузку
             */
            responses: [],
            
            /**
             * Текущий ответ
             */
            currentResponse: {},
            
            onCompleteCallback: function () {},

            /**
             * На начало загрузки
             */
            onUploadCallback: function () {},
            
            /**
             * На загрузку каждого файла
             */
            onFileCompleteCallback: function () {},
            
            /**
             * На выбор файла
             */
            onSelect: function(evt, ui) {
                let isImages = true;
                $.each(ui.all, function(index, file) {
                    if (!/image\//g.test(file.type)) {
                        isImages = false;
                    }
                });
                if (!isImages) {
                    alert("Прикреплять можно только изображения");
                }
                return isImages;
            },
            
            /**
             * Callback на окончание загрузок файла
             */
            onFileComplete: function(result) {
                var response = $.parseJSON(instance.currentResponse.response)[0];
                instance.onFileCompleteCallback(result, response);
                if (typeof instance.options.onFileComplete === 'function') {
                    instance.options.onFileComplete(result, response);
                }
                instance.responses.push(response);
            },   
            
            /**
             * Callback на окончание всех загрузок
             */
            onComplete: function(result) {
                if (typeof instance.options.onComplete === 'function') {
                    instance.options.onComplete(result, instance.responses);
                } else if (typeof data.onComplete === 'function') {
                    data.onComplete(instance);
                }
                instance.onCompleteCallback(result, instance.responses);
                instance.responses = [];
            },

            /**
             * Callback на загрузку
             */
            onUpload: function(result, xhr) {
                instance.onUploadCallback(result, xhr.xhr);
                if (xhr && xhr.xhr) {
                    instance.currentResponse = xhr.xhr;
                }
            },

            /**
             * @description Выполнить обработку после удаления файла.
             */
            afterClear() {
                if (typeof data.afterClear === 'function') {
                    data.afterClear(instance);
                }
            },
                    
            /**
             * Добавляет параметры get к ссылке
             */
            urlPrepare: function(url, params) {
                var part = '?';
                if (params) {
                    for (var i in params) {
                        part += i + '=' + encodeURIComponent(params[i]) + '&';
                    }
                }
                return url + part;
            },
            
            getFileapi: function() {
                return this.container.data('fileapi');
            },

            /**
             * @description Получить utcode загрузчика.
             *
             * @returns {string} Utcode.
             */
            getUtcode: function () {
                return instance.params.utcode ? instance.params.utcode : '';
            },
            
            /**
             * Инициализация
             */
            init: function() {
                this.options = this.config[data.template];
                let urlPrepared
                    = this.urlPrepare(this.options.url, this.params);
                View_Render.assign({
                    params: this.params
                });
                let tplRendered = View_Render.fetch(
                    'includes/FileAPI/tpl/' + this.options.tpl + '.tpl'
                );
                let strategy = this.strategies.multi;
                if (this.options.crop) {
                    strategy = this.strategies.crop;
                }
                if (this.options.single) {
                    strategy = this.strategies.single;
                }
                strategy.init({
                    url: urlPrepared,
                    html: tplRendered,
                    accept: this.params.accept,
                });
                this.container.addClass('fileapiContainer');
                return this;
            },
                    
            /**
             * отправка
             */
            upload: function(callback) {
                this.onCompleteCallback = callback;
                this.container.fileapi('upload');
            },
                    
            /**
             * Очистка
             */        
            clear: function() {
                this.getFileapi().clear();
                this.afterClear();
            },
        };
        return instance;
    }
};