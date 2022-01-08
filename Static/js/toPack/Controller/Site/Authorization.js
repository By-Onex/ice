/**
 * @desc Контроллер авторизации
 * @package Ice_32top
 */
var Controller_Site_Authorization = {
    init() {
        $('body').on('click', '.js-logon_site,.js-commentAuth', this.showForm)
            .on('click', '#logout_site', this.logout)
            .on('click', '#forumAuth', this.showForm);
        if (+(new URL(document.location)).searchParams.get('needAuth')) {
            new Promise(resolve => {
                this.showForm(new Event('click'), resolve);
            }).then(() => {
                if (+(new URL(document.location)).searchParams.get('doctorLogin')
                    || (+(new URL(document.location)).searchParams.get('referrer')
                    && (new URL(document.location)).searchParams.get('referrer')
                    .indexOf('/cabinet/doctor/') !== -1)
                ) {
                    this.tabs.toggle($(`div[data-tab-id="2"]`));
                }
            });
        }
    },

    initForm: function() {
        let self = this;
        $('#password_in_log').keyup(e => {
            this.checkPassword();
            if (e.keyCode === 13) {
                this.submit();
            }
        });
        let $togglePassBtns = $('.js-togglePass');
        $togglePassBtns.on('click', function () {
            self.passwordToggle($(this));
        });
        $togglePassBtns.each(function (index, element) {
            let targetId = $(element).attr('data-target');
            let sourceId = $(element).attr('data-source');
            let $target = $('#' + targetId);
            let $source = $('#' + sourceId);
            $source.on('input', function() {
                $target.val( $(this).val() );
            });
            $source.hide();
        });
    },

    passwordToggle: function($elem) {
        let self = this;
        let target = $elem.attr("data-target");
        let source = $elem.attr("data-source");
        let $password = $("#"+target);
        let $source = $("#"+source);
        if ($elem.hasClass('js-showPass')) {
            let pass = $password.val();
            $source.val(pass);
            $password.hide();
            $source.show();
            $elem.removeClass('js-showPass').addClass('js-hidePass');
            $elem.removeClass('icon-eye_hide').addClass('icon-eye');
        } else {
            let pass = $source.val();
            $source.val("");
            $password.val(pass);
            $source.hide();
            $password.show();
            $elem.removeClass('js-hidePass').addClass('js-showPass');
            $elem.removeClass('icon-eye').addClass('icon-eye_hide');
        }
    },

    showForm: function(e, afterOpen) {
        e.preventDefault();
        function callback (result) {
            if (result && result.html) {
                let popup = $('.js-popup');
                popup.html(result.html).show();
                Helper_Modal.openForm(popup);
                if (typeof afterOpen !== 'undefined') {afterOpen();}
            }
        }
        Controller.call (
            'Site_Authorization/showForm',
            {},
            callback,
            true
        );
    },

    hideForm: function() {
        let popup = $('.js-popup');
        popup.hide().html('');
        Helper_Modal.closeForm(popup);
    },

    async isValidEmail() {
        let inputLogin = $('#login_in_log');
        if (inputLogin.val()) {
            const date = inputLogin.val();
            const isMail = (/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i).test(date);
            const isPhone = await Helper_Phone.validate(date, true);
            if (isMail || isPhone) {
                function callback (result) {
                    if (!result.data.is_user) {
                        $('#incorrect_user_in_log').css({
                            'display' : 'block'
                        });
                        inputLogin.css({
                            'border' : '1px solid red'
                        });
                    } else {
                        $('#incorrect_user_in_log').css({
                            'display' : 'none'
                        });
                        inputLogin.css({
                            'border' : '1px solid #bbb'
                        });
                    }
                }
                Controller.call (
                    'Site_Authorization/checkLogin',
                    {
                        login : date
                    },
                    callback, 
                    true
                );
            } else {
                $('#incorrect_login_in_log').css({
                    'display' : 'block'
                });
                inputLogin.css({
                    'border' : '1px solid red'
                });
            }
        } else {
            $('incorrect_user_in_log').css({
                'display' : 'none'
            });
            $('#incorrect_login_in_log').css({
                'display' : 'none'
            });
            inputLogin.css({
                'border' : '1px solid #bbb'
            });
            $('#exists_login_in_log').css({
                'display' : 'none'
            });
        }
    },
    
    /**
	 * @desc Авторизация по логину и паролю.
	 * Эта авторизация отлична от авторизации по номеру и паролю на страницах
	 * комментариев.
     *
	 * @returns {Boolean}
	 */
    submit: function () {
        let self = this;
        let inputLogin = $('#login_in_log');
        let login = inputLogin.val();
        let inputPassword = $('#password_in_log');
        let password = inputPassword.val();
        let show_banners = !$('#show_banner').prop('checked');
        if (login !== '') {
            function callback1 (result) {
                if (result.data.is_user) {
                    $('#incorrect_user_in_log').css({
                        'display' : 'none'
                    });
                    inputLogin.css({
                        'border' : '1px solid #bbb'
                    });
                    if (password !== '') {
                        $('#password_not_exist_in_log').css({
                            'display' : 'none'
                        });
                        inputPassword.css({
                            'border' : '1px solid #bbb'
                        });
                        function callback2 (result) {
                            if (result.data.fail) {
                                let spanUserNotExist = $('#user_not_exist_in_log');
                                spanUserNotExist.html(result.html);
                                spanUserNotExist.css({
                                    'display' : 'block'
                                });
                                inputPassword.css({
                                    'border' : '1px solid red'
                                });
                            } else {
                                let $authUser = $('#auth-user');
                                $authUser.attr('data-user-name', result.data.user.name);
                                $authUser.attr('data-user-id', result.data.user.id);
                                $authUser.change();
                                Controller_User_Menu.reloadAuthInfo($('#block_authorization_users'), false);
                                Controller_User_Menu.reloadMobileAuthInfo();
                                self.updateForumAuthPanel();
                                Controller_Site_Authorization.hideForm();
                                $(document).trigger(
                                    'authenticationUser', result.data.user.name
                                );
                            }
                        }
                        Controller.call (
                            'Site_Authorization/submit',
                            {
                                "login": login,
                                "password": password,
                                "show_banners": show_banners
                            },
                            callback2, 
                            true
                        );
                    } else {
                        $('#password_not_exist_in_log').css({
                            'display' : 'block'
                        });
                        inputPassword.css({
                            'border' : '1px solid red'
                        });
                    }
                } else {
                    $('#incorrect_user_in_log').css({
                        'display' : 'block'
                    });
                    inputLogin.css({
                        'border' : '1px solid red'
                    });
                }
            }
            Controller.call (
                'Site_Authorization/checkLogin',
                {
                    login : login
                },
                callback1, 
                true
            );
        } else {
            inputLogin.css({
                'border' : '1px solid red'
            });
            if (password === '') {
                inputPassword.css({
                    'border' : '1px solid red'
                });
            }
        }
    },

    updateForumAuthPanel: function () {
        let panel = $('#forumAuthPanel');
        let authButton = $('.forum-autorize');
        if (panel.length === 0 && authButton.length === 0 ) {
            return;
        }
        function callback(result) {
            if (result.data.isAuthorized) {
                panel.find('input[name=name]').val(result.data.name);
                panel.find('.js-authPseudoLink').remove();
                authButton.addClass('hidden');
            }
        }
        Controller.call(
            'Site_Authorization/getUserInfo',
            {},
            callback,
            true
        );
    },

    logout: function () {
        function callback () {
            Controller_User_Menu
                .reloadAuthInfo($('#block_authorization_users'), true);
            Controller_User_Menu.reloadMobileAuthInfo();
        }
        Controller.call(
            'Site_Authorization/logout',
            {},
            callback,
            true
        );
    },
    
    checkPassword: function() {
        let inputPassword = $('#password_in_log');
        let password = inputPassword.val();
        if (password !== '' && (/[а-яА-Я]+/).test(password)) {
            $('#incorrect_password_in_log').css({
                'display' : 'block'
            });
            inputPassword.css({
                'border' : '1px solid red'
            });
        } else {
            $('#incorrect_password_in_log').css({
                'display' : 'none'
            });
            inputPassword.css({
                'border' : '1px solid #bbb'
            });
        }
    },

    focusInLogin: function() {
        $('#login_in_log').css({
            'border' : '1px solid #bbb'
        });
        $('#incorrect_login_in_log').css({
            'display' : 'none'
        });
        $('#incorrect_user_in_log').css({
            'display' : 'none'
        });
    },

    focusInPassword: function() {
        $('#password_in_log').css({
            'border' : '1px solid #bbb'
        });
        $('#incorrect_password_in_log').css({
            'display' : 'none'
        });
        $('#password_not_exist_in_log').css({
            'display' : 'none'
        });
        $('#user_not_exist_in_log').css({
            'display' : 'none'
        });
    },

    /**
     * @var object Табы на форме.
     */
    tabs: {
        /**
         * @var object Селекторы для табов.
         */
        selector: {
            container: '#form_logon_site',
            loginTab: '.js-loginTab',
            loginForm: '.js-loginForm',
        },

        /**
         * @var {object} Контейнер формы.
         */
        container: null,

        /**
         * @var string Класс для неактивного таба.
         */
        classInactiveTab: 'login-form__itemTab_noActive',

        /**
         * @description Проинициализировать табы формы.
         */
        init() {
            this.container = $(this.selector.container);
            this.setHandlerOfTabsByClick();
        },

        /**
         * @description Установить обработчики на клики табов.
         */
        setHandlerOfTabsByClick() {
            $(this.selector.loginTab, this.container).click((event) => {
                let target = $(event.target);
                if (!target.hasClass(this.classInactiveTab)) {
                    return;
                }
                this.toggle(target);
            });
        },

        /**
         * @description Переключить таб.
         *
         * @param {object} tab Нажатый таб.
         */
        toggle(tab) {
            let form = $(`div[data-form-id="${tab.data('tabId')}"`);
            $(this.selector.loginForm).not(form).each(function () {
                $(this).addClass('hidden').fadeOut(100);
            });
            form.removeClass('hidden').hide().fadeIn(100);
            $(this.selector.loginTab).not(tab).each((index, element) => {
               $(element).addClass(this.classInactiveTab);
            });
            tab.removeClass(this.classInactiveTab);
            $('input[type=text]:first', $(this.selector.loginForm)).focus();
        }
    },

    /**
     * @var object Аутентификация клиники.
     */
    authClinic: {
        /**
         * @var object Селекторы формы.
         */
        selector: {
            container: '.js-loginClinicForm',
            submit: '.js-loginClinicSubmit',
            inputLogin: '.js-loginClinicLogin',
            inputPassword: '.js-loginClinicPassword'
        },

        /**
         * @var object Конфигурации.
         */
        config: {
            modalVexTheme: 'vex-theme-32top',
            textErrorAuth: 'Ошибка аутентификации'
        },

        /**
         * @var object Контейнер формы.
         */
        container: null,

        /**
         * @description Проинициализировать.
         */
        init() {
            this.container = $(this.selector.container);
            if (!this.container.length) {
                return;
            }
            this.setHandlers();
        },

        /**
         * @description Установить обработчики формы.
         */
        setHandlers() {
            this.container.on('click', this.selector.submit, () => {
                this.submit();
            });
            this.container.on('keyup', this.selector.inputPassword, event => {
                if (event.keyCode === 13) {
                    this.submit();
                }
            });
            this.container.on('keyup', this.selector.inputLogin, event => {
                if (event.keyCode === 13) {
                    $(this.selector.inputPassword, this.container).focus();
                }
            });
        },

        /**
         * @description Обработать аутентификацию.
         */
        submit() {
            if (!this.validate()) {
                return this.showErrorMessage();
            }
            const callback = result => {
                if (result.error) {
                    this.showErrorMessage();
                    return;
                }
                window.location = result.data.path;
            };
            Controller.call(
                'Site_Clinic_Authorization/submit',
                {
                    data: Helper_Form.asObject(this.container),
                },
                callback,
                true
            )
        },

        /**
         * @description Проверить строку вводимого логина на формат ключа БД.
         *
         * @param string string Строка.
         *
         * @return boolean Соответствует.
         */
        checkFormatInputLogin(string) {
            return string.match(/^([\d]{1,11})$/gm) !== null;
        },

        /**
         * @description Показать окно ошибки аутентификации.
         */
        showErrorMessage() {
            vex.dialog.alert({
                message: this.config.textErrorAuth,
                className: this.config.modalVexTheme
            });
        },

        /**
         * @description Провалидировать данные формы.
         */
        validate() {
            let isValid = true;
            let inputLogin = $(this.selector.inputLogin, this.container);
            if (   !inputLogin.val().length
                || !this.checkFormatInputLogin(inputLogin.val())
            ) {
                isValid = false;
            }
            let inputPassword = $(this.selector.inputPassword, this.container);
            if (   !inputPassword.val().length
                || !Helper_Password.validate(inputPassword.val())
            ) {
                isValid = false;
            }
            return isValid;
        }
    },

    /**
     * @description Аутентификация доктора.
     * @type {Object}
     */
    authDoctor: {
        /**
         * @description Форма входа.
         * @type {Object}
         */
        form: {
            /**
             * @description Получить контейнер.
             * @return {Element}
             */
            get container() {
                return document.getElementById('form_logon_site')
                    .querySelector('.js-login-form-doctor');
            },

            /**
             * @description Получить поле ввода идентификатора доктора.
             * @return {Element|any}
             */
            get inputDoctorId() {
                return this.container.querySelector('[id="doc-key"]');
            },

            /**
             * @description Получить поле ввода пароля.
             * @return {Element|any}
             */
            get inputPassword() {
                return this.container.querySelector('[id="doc-password"]');
            },

            /**
             * @description Проверить допустимость вводимых данных.
             * @return {boolean} Допустимо.
             */
            get isValid() {
                return /^([\d]{1,11})$/.test(this.inputDoctorId.value)
                    && Helper_Password.validate(this.inputPassword.value);
            },
        },

        /**
         * @description Проинициализировать.
         */
        init() {
            let btn = this.form.container.querySelector('.js-btn-submit-doctor');
            btn.addEventListener('click', async (evt) => {
                if (evt.target.disabled) {
                    return;
                }
                evt.target.disabled = true;
                await this.submit();
                evt.target.disabled = false;
            });
            this.form.inputDoctorId.addEventListener('keyup', (evt) => {
                if (evt.key === 'Enter') {
                    this.form.inputPassword.focus();
                }
            });
            this.form.inputPassword.addEventListener('keyup', (evt) => {
                if (evt.key === 'Enter') {
                    btn.dispatchEvent(new Event('click'));
                }
            });
        },

        /**
         * @description Выполнить обработку аутентификации кабинета доктора.
         * @return {Promise}
         */
        submit() {
            return new Promise((resolve) => {
                if (!this.form.isValid) {
                    throw new Error();
                }
                resolve({
                    doctorId: this.form.inputDoctorId.value,
                    password: this.form.inputPassword.value,
                });
            }).then((data) => {
                return Controller.callPromise(
                    'Site_Doctor_Authorization/submit',
                    data,
                    true
                )
            }).then((result) => {
                if (result.error || !result.data.path) {
                    throw new Error();
                }
                window.location = result.data.path;
            }).catch(() => {
                vex.dialog.alert({
                    message: 'Ошибка аутентификации',
                    className: 'vex-theme-32top',
                });
            });
        },
    },
};