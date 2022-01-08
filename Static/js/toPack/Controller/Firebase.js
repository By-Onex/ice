/**
 * Контроллер для подписки на push-уведомления
 *
 * @link https://firebase.google.com/docs/reference/js
 */
var Controller_Firebase = {
    /**
     * @var {Object} Конфигурация для инициализации Firebase.
     */
    configInit: {
        apiKey: "AIzaSyDR9sO36lCYIsomJtnIn9S48TpYpR9qbrg",
        authDomain: "durable-spot-128008.firebaseapp.com",
        databaseURL: "https://durable-spot-128008.firebaseio.com",
        projectId: "durable-spot-128008",
        storageBucket: "durable-spot-128008.appspot.com",
        messagingSenderId: "481048474608"
    },

    /**
     * @var {Object} Firebase messaging.
     */
    messaging: null,

    /**
     * @var {boolean} Firebase проинициализирован.
     */
    initialized: false,

    /**
     * Инициализация Firebase
     */
    initPush: function () {
        this.messaging = firebase
            .initializeApp(this.configInit, '32top')
            .messaging();
        this.initFooter();
        this.initialized = true;
    },

    /**
     * Инициализация ссылки в футере
     */
    initFooter: function () {
        this.messaging.getToken()
            .then(function (currentToken) {
                if (!currentToken || !currentToken.length) {
                    return;
                }
                const callback = result => {
                    if (!result.data.hasSubscription) {
                        return;
                    }
                    $('.footer__subscribe__block').removeClass('hidden');
                    let link = $('.js-subscribeLink');
                    if (result.data.hasActiveSubscription) {
                        link.data('subscribe', 1);
                        link.html('Отписаться');
                    } else {
                        link.data('subscribe', 0);
                        link.html('Подписаться');
                    }
                };
                Controller.call(
                    'Notification/hasSubscription',
                    {
                        token: currentToken
                    },
                    callback,
                    true
                );
            });
        $(document).on('click', '.js-subscribeLink', (event) => {
            const noSubscribe = $(event.target).data('subscribe') === '0';
            if (noSubscribe) {
                this.subscribe();
            } else {
                this.unsubscribe();
            }
        });
    },

    /**
     * Создание подписки на push-уведомления
     *
     * @param params Параметры для создания подписки
     */
    createSubscription: function (params) {
        const action = (self, params) => {
            const tryCreateSubscription = () => {
                self.messaging.getToken()
                    .then(function (currentToken) {
                        if (!currentToken || !currentToken.length) {
                            $(params.subBlock).addClass('hidden');
                            $(params.subButton).addClass('hidden');
                            return;
                        }
                        Controller.call(
                            'Notification/createSubscription',
                            {
                                token: currentToken,
                                type: params.type,
                                data: params.data
                            },
                            function () {
                                $(params.subBlock).addClass('hidden');
                                $(params.subButton).addClass('hidden');
                                $(params.unsubButton).removeClass('hidden');
                                self.initFooter();
                            },
                            true
                        );
                    })
                    .catch(function () {
                        $(params.subBlock).addClass('hidden');
                        $(params.subButton).addClass('hidden');
                    });
            };
            const showSubButton = () => {
                if (!params.subBlock) {
                    params.subBlock = params.subButton;
                }
                if (params.cancelButton) {
                    $(document).on('click', params.cancelButton, function () {
                        $(params.subBlock).addClass('hidden');
                        $(params.unsubButton).removeClass('hidden');
                    });
                }
                $(params.subBlock).removeClass('hidden');
                $(params.unsubButton).addClass('hidden');
                $(params.subButton).click( function () {
                    Notification.requestPermission()
                        .then((status) => {
                            if (status === 'granted') {
                                tryCreateSubscription();
                            } else {
                                $(params.subBlock).addClass('hidden');
                                $(params.subButton).addClass('hidden');
                            }
                        });

                });
            };
            if (Notification.permission !== 'default') {
                return;
            }
            self.messaging.getToken()
                .then(function (currentToken) {
                    if (!currentToken || !currentToken.length) {
                        showSubButton();
                        return;
                    }
                    Controller.call(
                        'Notification/checkSubscription',
                        {
                            token: currentToken,
                            type: params.type,
                            data: params.data
                        },
                        function (result) {
                            if (!result.data.hasSubscription) {
                                showSubButton();
                            }
                        },
                        true
                    );
                })
                .catch(function () {
                    showSubButton();
                });
        };
        this.afterInitPush(action, params);
    },

    /**
     * Подписаться на уведомления если не заблокировано.
     */
    subscribe: function () {
        this.messaging.requestPermission()
            .then(() => {
                return this.messaging.getToken()
            })
            .then(function (currentToken) {
                if (!currentToken || !currentToken.length) {
                    return;
                }
                Controller.call(
                    'Notification/subscribe',
                    {
                        token: currentToken
                    },
                    function () {
                        let link = $('.js-subscribeLink');
                        link.data('subscribe', 1);
                        link.html('Отписаться');
                    },
                    true
                );
            });
    },

    /**
     * Отписаться от уведомлений при наличие подписки.
     */
    unsubscribe: function () {
        this.messaging.getToken()
            .then(function (currentToken) {
                if (!currentToken || !currentToken.length) {
                    return;
                }
                Controller.call(
                    'Notification/unsubscribe',
                    {
                        token: currentToken
                    },
                    function () {
                        let link = $('.js-subscribeLink');
                        link.data('subscribe', 0);
                        link.html('Подписаться');
                    },
                    true
                );
            });
    },

    /**
     * Костыль, который позволяет выполнить функцию после инициализации Firebase
     * т.к. с текущей системой Firebase может использоваться до инициализации
     *
     * @param func   Функция для выполнения
     * @param params Параметры, передаваемые в функцию
     */
    afterInitPush: function (func, params) {
        let timer = setInterval(
            function (self, params) {
                if (!self.initialized) {
                    return;
                }
                func(self, params);
                clearInterval(timer);
            },
            50, this, params
        );
    },

    /**
     * Инициализация настроек push-уведомлений для личного кабинета
     *
     * @param selector Куда полученную форму для настроек
     */
    initPushSettings: function (selector) {
        const action = (self, selector) => {
            self.messaging.getToken()
                .then(function (currentToken) {
                    if (!currentToken || !currentToken.length) {
                        return;
                    }
                    Controller.call(
                        'Notification/getSettingsForm',
                        {
                            token: currentToken
                        },
                        function (result) {
                            $(selector).html(result.html);
                        },
                        true
                    );
                });
        };
        this.afterInitPush(action, selector);
    }
};