<?php


$host = App::helperEnv()->get('HOST');

$cdn_server = substr($_SERVER['HTTP_HOST'], -8, 8) == $host ?
    //'http://32top-st.cdn.ngenix.net' :
    "http://img.$host" :
    '';
/**
 *
 * @desc Конфиги для сбора js
 * @var array
 *
 */
return array(
    'cdn_server' => $cdn_server,
    'targets' => array(

        // JS скрипты Сайта
        'js.js' => array(
            // Тип ресурсов
            'type' => 'js',
            // Путь до файла, куда будет записан скрипт
            'file' => IcEngine::root() . 'cache/js.js',
            // Адрес, как он будет отдан пользователю
            'url' => $cdn_server . '/cache/js.js',
            // настройки пакера
            'packer_config' => array(
                // префикс файла в собранном
                'item_prefix' => "/* {\$src} */\n",
                // постфикс файла в собранном
                'item_postfix' => "\n\n",
                // файл для хранения информации по собранным файлам
                'state_file' => IcEngine::root() . 'cache/js.js.txt'
            ),
            'sources' => array(
                'framework' => array(
                    'dir' => IcEngine::root(),
                    'file' => array(
                        '-Ice/Static/includes/jquery/js/jquery-3.5.1.min.js',
                        '-Ice/Static/includes/select2/js/select2.min.js',
                        '-Ice/Static/includes/jquery/js/jquery-ui-1.9.2.custom.min.js',
                        '-Ice/Static/includes/select2/js/i18n/ru.js'
                    )
                ),
                // Скрипты движка
                'engine' => array(
                    'dir' => IcEngine::path(),
                    'file' => array(
                        'Static/js/Ng/Template.js',
                        'Static/js/Ice.js',
                        'Static/js/JsHttpRequest.js',
                        'Static/js/Controller.js',
                        'Static/js/View/Render.js',
                        'Static/js/Helper/Render/Smarty.js',
                        'Static/js/toPack/Controller/**.js',
                        'Static/js/Ice/Class.js',
                        'Static/js/Ice/Resource/Manager.js',
                        'Static/js/Helper/Email.js',
                        'Static/js/Helper/Form.js',
                        'Static/js/Helper/Phone.js',
                        'Static/js/Debug.js',
                        'Static/js/Call/List.js',
                        'Static/js/toPack/Helper/Tab.js',
                        'Static/js/toPack/Helper/Tab/Loader.js',
                        '-Static/js/toPack/Loader.js',
                    )
                ),
                // Скрипты сайта
                /*'site' => array(
                    'dir' => IcEngine::root(),
                    'file' => array(
                        'Ice/js/jquery.appendix.js',
                        '-Ice/js/jquery.maskedinput-1.3.js',
                        '-Ice/js/includes/tip/jquery.bt.js',
                        'Ice/js/includes/tip/jquery.bgiframe.min.js',
                        'Ice/js/common.js',
                        'Ice/js/swfobject-2.2.min.js',
                        '-Ice/js/ajax/a-common.js',
                        '-Ice/js/swfobject.min.js',
                        'cache/site-jtpl.js',
                        '-Ice/js/includes/fancy/jquery.easing-1.3.pack.js',
                        //'-Ice/js/includes/fancy/jquery.fancybox-1.3.4.pack.js',
                        'Ice/js/ajax/ajaxupload.js',
                        'Ice/js/includes/carousel.js',
                        '-Ice/Static/js/includes/Jquery/chosen.jquery.min.js',
                        'Ice/Static/js/includes/Slider.js',
                        '-Ice/Static/js/noConflict/includes/Uploader/FileAPI/FileAPI.min.js',
                        '-Ice/Static/js/noConflict/includes/Uploader/jquery.fileapi.min.js',
                        '-Ice/Static/js/noConflict/includes/jquery.Jcrop.min.js',
                        'Ice/Static/js/noConflict/Controller/Component/Comment/Rating.js',
                        'Ice/Static/js/noConflict/Controller/Component/Comment/Roll/Item.js',
                        'Ice/Static/js/noConflict/Controller/Component/Comment/Form/Extended.js',
                        'Ice/js/swiper.js',
                        'Ice/Static/js/includes/Jquery/jquery.bootpag-custom.js',
                        'Ice/Static/js/includes/Jquery/jquery.twbsPagination.js',
                        'Ice/Static/js/includes/firebase-app.js',
                        'Ice/Static/js/includes/firebase-messaging.js',
                        'Ice/Static/includes/cropperjs/js/cropper.js'
                    ),
                ),*/
                //скрипты сайта toPack
                'toPack' => array(
                    'dir' => IcEngine::root() . 'Ice/Static/js/',
                    'file' => array(
                        'toPack/**.js',
                    )
                ),
                //скрипты сайта toPack
                'crop' => array(
                    'dir' => IcEngine::root() . 'Ice/js/includes/crop/',
                    'file' => array(
                        '-**.js'
                    ),
                ),
                'other' => array(
                    'dir' => IcEngine::root() . 'cache/resource/',
                    'file' => array(
                        'staticJsTimeRebuild.js',
                        'ngtpl.js'
                    ),
                )
            )
        )
    )
);
