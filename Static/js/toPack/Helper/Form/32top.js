/**
 * @desc Помощник для форм 32топ
 */
var Helper_Form_32top = {

    /**
     * Подсказка у не корректного поля и сообщение
     * */
    alert: function ($form, $msg, $obj) {
        if (typeof $obj != 'undefined') {
            var $hint, objHeight, posTop;
            //инпуту с ошибкой задаем класс
            $obj.addClass('err');
            //показываем подсказку для этого инпута
            $hint = $obj.parents('.input_container').children('.hint');
            objHeight = $obj.parents('.input_container').outerHeight()
                + parseInt($obj.css('margin-top'));
            posTop = -($hint.outerHeight() - objHeight) / 2;
            $hint.fadeIn().css({
                top: posTop,
                marginTop: 0
            });
        }
        //Показываем текст ошибки
        $('.result-msg', $form).html('<span class="poorly">' + $msg + '</span>')
            .show().removeClass('hidden');
        //Инит плейсхолдеров
        $(":input[placeholder], textarea[placeholder]").placeholder();
    },

    //Клонирование последнего блока формы изображений
    cloneImageForm: function () {
        var $last, last_name, $new, id;
        $last = $('.add_images .image:last');
        last_name = $last.find('input[type=hidden]').attr('name').substr(3);
        $new = $last.clone();
        id = $new.attr('class').split('_');
        id = parseInt(id[id.length - 1]);
        last_name++;
        $new.find('input[type=hidden]').attr('name', 'img' + last_name);
        $new.removeAttr('class')
            .addClass('image')
            .addClass('image image_' + (id + 1))
            .insertAfter($last);
        $('[name=file]', $new).data('input_file_upload', '');
        $('[name=file]', $new).data('mousemove', '');
        var $file = Helper_Form_32top.initFileUpload($new);
        $file.data('image_sort', (id + 1));
        $file.bind('change', function () {
            var utcode = $('input[name=utcode]').val();
            Helper_Form_32top.uploadImage(this, utcode);
        });
    },

    cloneCropImageForm: function () {
        var $last, $new, id;
        $last = $('.add_images .image:last');
        $new = $last.clone();
        id = $new.attr('class').split('_');
        id = parseInt(id[id.length - 1]);
        $('[name=img' + id + ']', $new).attr('name', 'img' + (id + 1));
        $new
            .removeAttr('class')
            .addClass('image')
            .addClass('image image_' + (id + 1))
            .insertAfter($last);
        $('[name=file]', $new).data('input_file_upload', '');
        $('[name=file]', $new).data('mousemove', '');
        var $file = Helper_Form_32top.initFileUpload($new);
        $file.data('image_sort', (id + 1));
        $file.bind('change', function () {
            var utcode = $('input[name=utcode]').val();
            Helper_Form_32top.uploadCropImage(this, utcode);
        });
    },

    initImages: function () {
        //действие по кнопки "удалить" (картинку)
        $('.hover').on('click', function () {
            Helper_Form_32top.removeImg($(this));
        }).filter('.hidden').hide();
        // Изображения
        var sort = 0;
        $('.add_images .image').each(function () {
            sort++;
            $(this)
                .removeAttr('class')
                .addClass('image image_' + sort);
            var $file = Helper_Form_32top.initFileUpload($(this));
            $file.data('image_sort', sort);
            $file.bind('change', function () {
                var size = 0;
                if ('files' in this) {
                    size = this.files[0].size;
                }
                if (size < 6144 * 1024) {
                    var utcode = $('input[name=utcode]').val();
                    Helper_Form_32top.uploadImage(this, utcode);
                } else {
                    alert('Размер фотографии не должен привышать 6144 Кб');
                }
            });
        });
    },

    initCropImages: function () {
        //действие по кнопки "удалить" (картинку)
        $('.hover').on('click', function () {
            if (!confirm("Удалить изображение безвозвратно?")) {
                return;
            }
            var $this;
            $this = $(this);
            if ($this.closest('.cur_imgs').hasClass('cur_imgs')) {
                $this.closest('.image').remove();
            } else {
                $this.closest('.image').find('img:not(.preloader)').attr('src', '');
            }
            if ((/admin/.test(document.location.href))) {
                var data = {};
                data['id'] = $this.parent().siblings('input[type=hidden]').val();
                function callback() {
                    $this.closest('.image').remove();
                }
                Controller.call(
                    '32img/deleteWithEdit',
                    data,
                    callback,
                    true
                );
            }
            $this.parent()
                .children().hide()
                .siblings('input[type=file]').show()
                .siblings('input[type=hidden]').val('');
            $this.parent().remove();
        }).filter('.hidden').hide();
        // Изображения
        var sort = 0;
        $('.add_images .image').each(function () {
            var img_id = $(this).find('input[type=hidden]').val();
            var data = {};
            data['img_id'] = img_id;
            var img = this;
            if ((/admin/.test(document.location.href)) && img_id) {
                Controller.call(
                    '32img/getShow',
                    data,
                    function (result) {
                        $(img).css(
                            'border', 'solid ' + result.data.color + ' 3px'
                        );
                    },
                    true
                );
            }
            sort++;
            $(this).removeAttr('class').addClass('image image_' + sort);
            if (img_id.length == 0 || img_id == ' ') {
                var $file = Helper_Form_32top.initFileUpload($(this));
                $file.data('image_sort', sort);
                $file.bind('change', function () {
                    var utcode = $('input[name=utcode]').val();
                    Helper_Form_32top.uploadCropImage(this, utcode);
                    var img = $(this).parent('.image');
                    var img_id = img.find('input[type=hidden]').val();
                    var data = {};
                    data['img_id'] = img_id;
                    if ((/admin/.test(document.location.href)) && img_id) {
                        Controller.call(
                            '32img/getShow',
                            data,
                            function (result) {
                                if (result.data.noImage) {
                                    $(img).hide();
                                } else {
                                    $(img).show();
                                    $(img).css('border', 'solid ' + result.data.color + ' 3px');
                                }
                            },
                            true
                        );
                    }
                });
            } else {
                $(this).find('img:not(.preloader)').bind('click', function () {
                    function callback(result) {
                        var point = $('input[value=' + result.data.image.id + ']');
                        var img = point.parent('.image').find('img:not(.preloader)');
                        Controller_Crop.confirm(result.data.image, $(img));
                    }
                    var data = {};
                    data ['id'] = $(this).closest('.image').find('input[type=hidden]').val();
                    Controller.call('32img/getImage', data, callback, true);
                });
            }
        });
    },

    initInputHints: function () {
        //прячем подсказки при входе на инпут
        var $inputs = $('.input_container input,.input_container textarea');
        $inputs.focus(function () {
            var $this = $(this);
            var $current_hint = $this.parent().children('.hint');
            if ($this.hasClass('err')) {
                $this.removeClass('err');
                $current_hint.css({
                    marginTop: -($current_hint.height() / 2),
                    top: 27
                });
                $('.input_container .hint').hide();
                $current_hint.fadeIn();
            }
        });
        // прячем подсказки при уходе с инпута
        $inputs.blur(function () {
            var $this = $(this);
            var $current_hint = $this.parent().children('.hint');
            if (($this.attr('name')
                != 'phone' && $this.attr('name')
                != 'telephone')
            ) {//костыль еба!
                Helper_Input.check($this);
            }
            if ($this.hasClass('err')) {
                $('.input_container .hint').hide();
                $current_hint
                    .css({
                        marginTop: -($current_hint.height() / 2),
                        top: 27
                    })
                    .show();
            } else {
                $current_hint.hide();
            }
        });
    },

    /**
     * Магия над "Услугами" на форме добавления/редактирования
     * (клиники, доктора, админки)
     */
    initServices: function () {
        var show_text = '(показать)';
        var hide_text = '(скрыть)';
        //Услуги
        $('.collapsing').on('click', function () {
            if ($(this).text() == show_text) {
                $(this).text(hide_text);
                $(this).parent().find('ul').show();
                return;
            } else {
                $(this).text(show_text);
                $(this).parent().find('ul').hide();
                return;
            }
        });
        $('.collapse', '.services').on('click', function () {
            $(this).text(
                $(this).text() == show_text ? hide_text : show_text
            ).siblings('ul').slideToggle();
        });
        $('.services_list .parent').click(function () {
            var $item = $(this);
            $item.parent('li').toggleClass('select');
            if ($item.siblings().is(':checked') || $item.is(':checked')) {
                $item
                    .siblings('ul').children('li').addClass('select')
                    .children('input').attr('checked', 'true');
            } else {
                $item
                    .siblings('ul').children('li').removeClass('select')
                    .children('input').removeAttr('checked');
            }
        });
        $('.services_list input.child').click(function () {
            $item = $(this);
            $item.parent('li').toggleClass('select');
            if (
                $item.get(0).tagName == 'INPUT' && $item.is(':checked')
            ) {
                $item
                    .parent('li ul li').parent('ul').siblings('input').attr('checked', 'true')
                    .parent('li').addClass('select');
            } else {
                if (!$item.parent('li').siblings('li').children('input').is(':checked')) {
                    $item
                        .parent('li ul li').parent('ul').siblings('input').removeAttr('checked')
                        .parent('li').removeClass('select');
                }
            }
        });
    },

    initServicesArticle: function () {
        var show_text = '(показать)';
        var hide_text = '(скрыть)';
        //Услуги
        $('.collapse', '.services').on('click', function () {
            $(this).text(
                $(this).text() == show_text ? hide_text : show_text
            ).siblings('ul').slideToggle();
        });
        // для родительских элементов
        $('.services_list .parent').click(function () {
            // для родительскиъ элементов
            $.each($('.parent'), function (index, value) {
                if (value.id != '') {
                    //  не удаляем элемент  до
                    $('#' + value.id).removeAttr('checked');
                }
            });
            //  так же снимаем с дочерних
            $.each($('.child'), function (index, value) {
                if (value.id != '') {
                    //  не удаляем элемент  до
                    $('#' + value.id).removeAttr('checked');
                }
            });
        });

        $('.services_list input.child').click(function () {
            $item = $(this);
            var tempId = $(this).attr('id');
            $item.parent('li').toggleClass('select');
            if (
                $item.get(0).tagName == 'INPUT' && $item.is(':checked')
            ) {
                $.each($('.child'), function (index, value) {
                    if (value.id != '') {
                        //  не удаляем элемент  до
                        if (tempId != value.id) {
                            $('#' + value.id).removeAttr('checked');
                        }
                    }
                });
                $item
                    .parent('li ul li').parent('ul').siblings('input').attr('checked', 'true')
                    .parent('li').addClass('select');
            } else {
                if (!$item.parent('li').siblings('li').children('input').is(':checked')) {
                    $item
                        .parent('li ul li').parent('ul').siblings('input').removeAttr('checked')
                        .parent('li').removeClass('select');
                }
            }
        });
    },

    /**
     * Удаление текста плейсхолдера
     * @param $form
     */
    placeholderRemove: function ($form) {
        $(":input[placeholder], textarea[placeholder]", $form).each(function () {
            $this = $(this);
            if ($this.val() == $this.attr('placeholder')) {
                $this.val('');
            }
        });
    },

    /**
     * Восстановление текста плейсхолдера
     * @param $form
     */
    placeholderRestore: function ($form) {
        $(":input[placeholder], textarea[placeholder]", $form).placeholder();
    },

    /**
     * Проверяем на начиличие текста в input/textarea
     * и не совпадение оного с текстом placeholder
     * @param $input
     * @returns {Boolean}
     */
    fieldCheck: function ($input) {
        return !(!$input.val().trim() || $input.val().trim() == $input.attr('placeholder'));
    },

    /**
     * Простая проверка input, textarea на заполненность
     * @param $form форма на которой производиться проверка
     * @param $alert подсказка
     */
    simpleCheck: function ($form, $alert) {
        $alert =
            typeof ($alert) == 'undefined' ? (
                $('.poorly').length ? $('.poorly') : $form.append('<p class="poorly"></p>')
            ) : $alert;
        $flag = true;
        $alert.hide();
        $('textarea[placeholder]:visible, input[placeholder]:visible', $form).each(function () {
            $input = $(this);
            if ($input.val() == $input.attr('placeholder') || !$input.val()) {
                $alert
                    .html('Не заполнено поле: ' + $input.attr('placeholder'))
                    .show();
                $flag = false;
            }
        });
        $flag ? $alert.hide() : $alert.show();
        return $flag;
    },

    /**
     * Сносим подсказку у поля
     * */
    unAlert: function ($obj) {
        $obj.removeClass('err');
        $obj.siblings('.hint').hide();
        $('.result-msg').hide();
    },

    /**
     * чистим форму от сообщений при прошлой проверки формы
     * */
    unAlertAll: function ($form) {
        $('.result-msg', $form).hide();
        $('.hint', $form).hide();
        $('.err', $form).removeClass('err');
    },

    /**
     * Загрузка изображения
     * @param file
     *        input файла
     * @param utcode
     *        код временного контента
     *        Индекс сортировки
     */
    uploadImage: function (file, utcode) {
        var $file = $(file);
        var sort = $file.data('image_sort');
        if (!$file.val()) {
            return;
        }
        var $image = $('.add_images .image_' + sort);
        $('.loading', $image).show();
        function callback(result) {
            $('.loading', $image).hide();
            if (result.data.error) {
                alert(result.data.error);
                return;
            }
            if (result.data && result.data.image) {
                var $img = $('img:not(.preloader)', $image);
                Helper_Form_32top.cloneImageForm();
                $img.attr('src', result.data.image.smallUrl);
                $img.show().removeClass('hidden');
                $('.image_' + sort).css({
                    'background': 'none',
                    'border': 'none'
                });
                $('.del.hover', $image).show().removeClass('hidden');
                $('input[type=hidden]', $image).val(result.data.image.id);
            }
        }
        Controller.call(
            '32img/uploadImage',
            {
                file: file,
                utcode: utcode,
                sort: sort
            },
            callback, true
        );
    },

    /**
     * Загрузка изображения
     * @param file
     *        input файла
     * @param utcode
     *        код временного контента
     *        Индекс сортировки
     */
    uploadCropImage: function (file, utcode) {
        var $save_avatar = $('div .save_avatar');
        if (!$save_avatar.html()) {
            Helper_Form_32top.cloneCropImageForm();
        } else {
            $('.add_images img').hide();
            $('input[type=file]').hide();
        }
        var $file = $(file);
        if (!$file.val()) {
            return;
        }
        var $image = $file.parent('.image');
        $('.loading', $image).show();
        function callback(result) {
            $("form#editInterface").removeAttr('onsubmit').removeAttr('target');
            $('.loading', $image).hide();
            if (result.error) {
                alert(result.error);
                return;
            }
            if (result.data && result.data.image) {
                var $img = $image.find('img');
                $('.del.hover', $image).show().removeClass('hidden');
                $('input[type=hidden]', $image).val(result.data.image.id);
                Controller_Crop.confirm(result.data.image, $img);
            }
        }
        Controller.call(
            '32img/uploadImage',
            {
                file: file,
                utcode: utcode
            },
            callback, true
        );
    },

    testFild: function () {
        var i = 1;
        $('input:visible,textarea:visible').each(function () {
            $(this).val('Тест ' + this.name);
        });
        $('select:visible').each(function () {
            i++;
            i = $(this).children('option:eq(' + i + ')') ? i : 2;
            $(this).val($(this).children('option:eq(' + i + ')').val());
        });
    },

    removeImg: function (button) {
        if (!confirm("Удалить изображение безвозвратно?")) {
            return;
        }
        var img_id = button.parent().find('input[type=hidden]').val();
        button.parent()
            .children().hide()
            .siblings('input[type=file]').show()
            .siblings('input[type=hidden]').val('');
        button.parent().remove();
        function callback(result) {

        }
        Controller.call(
            '32img/removeImg',
            {
                img_id: img_id
            },
            callback, true
        );
    },

    /**
     *
     * @param jQuery $owner
     * @returns jQuery input[type=file]
     */
    initFileUpload: function ($owner) {
        var $input = $('input[type="file"]', $owner);
        var is_new = false;
        if ($input.length == 0) {
            $input = $('<input type="file" />');
            is_new = true;
        }
        $input.css({
            position: "absolute",
            opacity: 0.0,
            cursor: "pointer",
            display: "inherit",
            margin: 0,
            padding: 0,
            width: "220px"
        });
        if (is_new) {
            $owner.append($input);
        }
        $owner.data('input_file_upload', $input);
        $owner.css('overflow', 'hidden');
        var pos = $owner.css('position');
        if (pos != "relative" && pos != "absolute") {
            $owner.css('position', 'relative');
        }
        $owner.bind('mousemove', function (event) {
            var $input = $(event.currentTarget).data('input_file_upload');

            var y = event.pageY - $owner.offset().top - 5 + 'px';
            var x = event.pageX - $owner.offset().left - 170 + 'px';

            $input.css({left: x, top: y});
        });
        return $input;
    },

    initTogglePasswordStars: function ($from) {
        if (!$from) {
            $from = $('body');
        }
        var $checkboxes = $('input[type="checkbox"].tps_checkbox', $from);
        $checkboxes.each(function () {
            $(this).bind(
                'click',
                function () {
                    var $this = $(this);
                    if ($this.data('tps_text')) {
                        Helper_Form.togglePasswordStars($this, $this.data('tps_text'));
                        return;
                    }
                    var $parent = $this.parent();
                    while ($parent.length) {
                        var $tps_password = $parent.find('.tps_password');
                        if ($tps_password.length) {
                            var $tps_input = Helper_Form._toggleTextForPassword($tps_password);
                            $this.data('tps_password', $tps_password);
                            $this.data('tps_input', $tps_input);
                            Helper_Form.togglePasswordStars($this);
                            return;
                        }
                        $parent = $parent.parent();
                    }
                }
            );
        });
    }
};