/**
 * Контроллер отзывов
 */
var Controller_Review = {

    config: {
        minLength: 2,
        clinicName: {
            id: '#clinicName',
            nameId: '#clinicId',
            method: 'getClinics'
        },
        doctorName: {
            id: '#doctorName',
            nameId: '#doctorId',
            method: 'getDoctors'
        }
    },

    /**
     * Инициализация отзывов
     */
    init: function () {
        this.formInit();
        this.initHelpModal();
        this.getList();
        this.initSubmit();
    },

    /**
     * Инициализация формы
     */
    formInit: function () {
        $('.form__review-form').on('keyup change blink', '.form__review__text', function() {
            var count = $('.form__review__text').val().trim().length;
            $('.js-symbol-count').html(count);
            if (count >= 100) {
                $('.js-min-require').addClass('hidden');
            } else {
                $('.js-min-require').removeClass('hidden');
            }
        });
        $('.form__review__item').change(function () {
            $('.form__review').empty().append(Controller_Wait.getHtml());
            var data = {
                'type': $(this).val()
            };
            function callback(result) {
                $('.form__review').empty().append(result.html);
            }
            Controller.call(
                'Review/getForm',
                data,
                callback,
                true
            );
        });
    },

    /**
     * Инициализация окна помощи
     */
    initHelpModal: function () {
        let formReview = $('.form__review');
        formReview.on('click', '.js-whatWrite', function () {
            let $whatWriteModal = $('#whatWrite');
            $whatWriteModal.find('.clinic-rates__what-write__text').addClass('on');
            Helper_Modal.openForm($whatWriteModal);
        });
        formReview.on('click', '.js-close', function () {
            let $whatWriteModal = $('#whatWrite');
            $whatWriteModal.find('.clinic-rates__what-write__text').removeClass('on');
            Helper_Modal.closeForm($whatWriteModal);
        });
    },

    /**
     * Поиск клиник и докторов для автозаполнения
     */
    getList: function () {
        var self = this;
        $('.form__review').on("keyup", ".search__autocomplete", function () {
            id = $(this)[0].id;
            $text = $(self.config[id].id).val();
            if ($text.length > self.config.minLength) {
                data = [];
                data['value'] = $text;
                function callback(result) {
                    $(self.config[id].id).autocomplete({
                        source: result.data.list,
                        minLength: self.config.minLength,
                        select: function (event, ui) {
                            $(self.config[id].nameId).val(ui.item.id);
                        }
                    });
                    $('.more_info_settings .ajax_loader').addClass('hidden');
                }

                Controller.call(
                    'Review/' + self.config[id].method,
                    data,
                    callback,
                    true
                );
            }
        });
    },

    /**
     * Инициализация отправки формы
     */
    initSubmit: function () {
        var self = this;
        $('.form__review').on('click', '.form__review__submit__btn', function () {
            self.submit();
        });
        $(window).on('registred', function() {
            self.submit();
        });
    },

    /**
     * Инициализация отправки формы
     */
    submit: function () {
        let $form = $('.form__review-form');
        let data = Helper_Form.asArray($form);
        data.url = window.location.pathname;
        $form.find('.hint').addClass('hidden');
        $form.find('.hint__clinic').addClass('hidden');
        if (data.clinicId === "" || data.doctorId === "") {
            $form.find('.hint').removeClass('hidden');
            return;
        }
        if ($('.form__review__text').val().trim().length < 100) {
            $form.find('.hint__clinic').removeClass('hidden');
            return;
        }
        function callback(result) {
            $('.message').empty().append(result.html);
            if (!result.data.authorized) {
                Controller_Site_Registration.showForm();
            }
            if (result.data.success) {
                Controller_Yandex_Metrika.reachGoal('RFORM');
                $('.form__review__name').val('');
                $('.form__review__id').val('');
                $('.form__review__text').val('');
                if (result.data.redirect) {
                    setTimeout(function () {
                        if (!result.data.reviewId) {
                            window.location.href = result.data.redirect;
                        }
                    }, 1000);
                }
            }
        }
        Controller.call(
            'Review/submit',
            data,
            callback,
            true
        );
    }
};