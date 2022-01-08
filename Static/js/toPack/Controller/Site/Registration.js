/**
 * @desc Контроллер регистрации
 * @package Ice_32top
 */
var Controller_Site_Registration = {
    init: function () {
        $('#registration_site').attr('onclick', 'Controller_Site_Registration.showForm();');
        $('#registration_site').removeAttr("href");
    },

    showForm: function () {
        function callback(result) {
            if (result && result.html) {
                let popup = $('.js-popup');
                popup.html(result.html).show();
                Helper_Modal.openForm(popup);
            }
        }
        Controller.call(
            'Site_Registration/showForm',
            {},
            callback,
            true
        );
    },

    hideForm: function () {
        let popup = $('.js-popup');
        popup.hide().html('');
        Helper_Modal.closeForm(popup);
    },

    async isValidEmail() {
        let elLogin = $('#login_in_reg');
        if (elLogin.val()) {
            const login = elLogin.val();
            const isMail = (/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i).test(login);
            const isPhone = await Helper_Phone.validate(login, true);
            if (isMail || isPhone) {
                $('#incorrect_login_in_reg').css({ 'display': 'none' });
                elLogin.css({ 'border': '1px solid #bbb' });
                function callback(result) {
                    if (result.data.is_user) {
                        $('#exists_login_in_reg').css({ 'display': 'block' });
                        elLogin.css({ 'border': '1px solid red' });
                    }
                }
                Controller.call(
                    'Site_Registration/checkLogin',
                    { login: login },
                    callback,
                    true
                );
            } else {
                $('#incorrect_login_in_reg').css({ 'display': 'block' });
                elLogin.css({ 'border': '1px solid red' });
                $('#exists_login_in_reg').css({ 'display': 'none' });
            }
        } else {
            $('#incorrect_login_in_reg').css({ 'display': 'none' });
            elLogin.css({ 'border': '1px solid #bbb' });
            $('#exists_login_in_reg').css({ 'display': 'none' });
        }
    },

    submit: function () {
        var login = $('#login_in_reg').val();
        var password = $('#password_in_reg').val();
        if (login !== '') {
            function callback1(result) {
                if (!result.data.is_user) {
                    if (password !== '') {
                        function callback2(result) {
                            if (result.data.login_fail) {
                                $('#not_validate_log').css({
                                    'display': 'block'
                                });
                                $('#login_in_reg').css({
                                    'border': '1px solid red'
                                });
                                $('#not_validate_log').text(result.data.login_fail);
                            }
                            if (result.data.password_fail) {
                                $('#not_validate_pass').css({
                                    'display': 'block'
                                });
                                $('#password_in_reg').css({
                                    'border': '1px solid red'
                                });
                                $('#not_validate_pass').text(result.data.password_fail);
                            }
                            if (!result.data.login_fail && !result.data.password_fail && result.data.needRedirect) {
                                setTimeout(function () {
                                    window.location.href = result.data.redirect;
                                }, 1000);
                            } else {
                                $('.js-popup').hide();
                                $(window).trigger('registred');
                            }
                        }
                        Controller.call(
                            'Site_Registration/submit',
                            {
                                login: login,
                                password: password,
                                url: window.location.pathname
                            },
                            callback2,
                            true
                        );
                    } else {
                        $('#password_not_exist_in_reg').css({
                            'display': 'block'
                        });
                        $('#password_in_reg').css({
                            'border': '1px solid red'
                        });
                    }
                } else {
                    $('#incorrect_user_in_reg').css({
                        'display': 'block'
                    });
                    $('#login_in_reg').css({
                        'border': '1px solid red'
                    });
                }
            }
            Controller.call(
                'Site_Registration/checkLogin',
                {
                    login: login
                },
                callback1,
                true
            );
        } else {
            $('#login_in_reg').css({
                'border': '1px solid red'
            });
            if (password === '') {
                $('#password_in_reg').css({
                    'border': '1px solid red'
                });
            }
        }
    },

    focusInLogin: function () {
        $('#login_in_reg').css({
            'border': '1px solid #bbb'
        });
        $('#incorrect_login_in_reg').css({
            'display': 'none'
        });
        $('#exists_login_in_reg').css({
            'display': 'none'
        });
    },

    focusInPassword: function () {
        $('#password_in_reg').css({
            'border': '1px solid #bbb'
        });
        $('#incorrect_password_in_reg').css({
            'display': 'none'
        });
        $('#password_not_exist_in_reg').css({
            'display': 'none'
        });
        $('#not_validate').css({
            'display': 'none'
        });
    },

    /**
     * @description Заменить поле ввода пароля на новое с типом для просмотра.
     */
    passTrigger: function () {
        let inputPassword = $('input#password_in_reg');
        let newInputPassword = document.createElement('input');
        newInputPassword.id = 'password_in_reg';
        newInputPassword.classList.add('clinics-add__input');
        newInputPassword.onfocus = this.focusInPassword();
        newInputPassword.value = inputPassword.val();
        if ($('#show_pass_for_label').attr('checked')) {
            newInputPassword.type = 'text';
        } else {
            newInputPassword.type = 'password';
        }
        inputPassword.remove();
        $('#for_pass').after(newInputPassword);
    },

    /**
     * Редирект после подтвержения регистрации из письма
     */
    complete: function (data) {
        setTimeout(function () {
            window.location.href = data.redirect;
        }, 1000);
    }
};