<?php

return [
    'comment' => 'Города сайта',

    'author' => 'HG_32top',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Первичный ключ',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'subdomain' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Домен 3-го уровня для города',
                'Not_Null',
            ],
        ],

        'show' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать ли название города в различных интерфейсах',
                'Not_Null',
            ],
        ],

        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Активно',
                'Not_Null',
            ],
        ],

        'name' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Название города',
                'Not_Null',
            ],
        ],

        'altName' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Альтернативное нвазние города',
                'Not_Null',
            ],
        ],

        'seoName' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'полное имя для города в целях SEO',
                'Not_Null',
            ],
        ],

        'rodPadezh' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Название города в родительном падеже',
                'Not_Null',
            ],
        ],

        'rTitle' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'Название в родительном падеже',
                'Not_Null',
            ],
        ],

        'altRodPadezh' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Альтернативное название города в родительном падеже',
                'Not_Null',
            ],
        ],

        'seoRodPadezh' => [
            'Varchar',
            [
                'Size' => 32,
                'Not_Null',
            ],
        ],

        'predlPadezh' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Название города в предложном падеже',
                'Not_Null',
            ],
        ],

        'mainpageTitle' => [
            'Text',
            [
                'Comment' => 'Заголовок главной страницы',
                'Not_Null',
            ],
        ],

        'region' => [
            'Varchar',
            [
                'Size'    => 50,
                'Default' => '',
                'Comment' => 'область',
                'Not_Null',
            ],
        ],

        'cityDistrictName' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Административная единица (район/округ)',
                'Not_Null',
            ],
        ],

        'cityDistrictRodPadezh' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Район/округ в род. падеже',
                'Not_Null',
            ],
        ],

        'cityDistrictDatPadezh' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Район/округ в дат. падеже',
                'Not_Null',
            ],
        ],

        'cityDistrictMname' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Район/округ во множественном числе',
                'Not_Null',
            ],
        ],

        'cityDistrictMrodPadezh' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Район/округ во мн.ч. (род. падеж)',
                'Not_Null',
            ],
        ],

        'cityDistrictMdatPadezh' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Район/округ во мн. ч. (дат. падеж)',
                'Not_Null',
            ],
        ],

        'centerCoords' => [
            'Varchar',
            [
                'Size'    => 20,
                'Comment' => 'Координаты центра',
                'Not_Null',
            ],
        ],

        'centerLng' => [
            'Varchar',
            [
                'Size'    => 10,
                'Comment' => 'Широта',
                'Not_Null',
            ],
        ],

        'centerLat' => [
            'Varchar',
            [
                'Size'    => 10,
                'Comment' => 'Долгота',
                'Not_Null',
            ],
        ],

        'mapScale' => [
            'Int',
            [
                'Comment' => 'Масштаб карты',
                'Not_Null',
            ],
        ],

        'articlePaidLinkCount' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Макс.количество платных ссылок на статьи',
                'Not_Null',
            ],
        ],

        'mainpage_text' => [
            'Text',
            [
                'Comment' => 'текст на главной',
                'Not_Null',
            ],
        ],

        'Main_Text__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'ID Текста главной страницы',
                'Not_Null',
            ],
        ],

        'translit' => [
            'Varchar',
            [
                'Size'    => 40,
                'Comment' => 'Транслит названия города',
                'Not_Null',
            ],
        ],

        'alt_translit' => [
            'Varchar',
            [
                'Size'    => 40,
                'Comment' => 'Альтернативный транслит',
                'Not_Null',
            ],
        ],

        'making_sites_text' => [
            'Text',
            [
                'Comment' => 'Текст на странице \"Мы делаем сайты\"',
                'Not_Null',
            ],
        ],

        'reclame_text' => [
            'Text',
            [
                'Comment' => 'Текст на странице рекламы',
                'Not_Null',
            ],
        ],

        'reclame_phone' => [
            'Varchar',
            [
                'Size'    => 50,
                'Default' => '+7 923 465 10 08',
                'Comment' => 'Телефон',
                'Not_Null',
            ],
        ],

        'robotsText' => [
            'Text',
            [
                'Not_Null',
            ],
        ],

        'minClinicRate' => [
            'Double',
            [
                'Default' => -1,
                'Comment' => 'Минимальный абсолютный рейтинг клиники',
                'Not_Null',
            ],
        ],

        'maxClinicRate' => [
            'Double',
            [
                'Default' => 1,
                'Comment' => 'Максимальный абсолютный рейтинг клиники',
                'Not_Null',
            ],
        ],

        'avgClinicRate' => [
            'Double',
            [
                'Default' => 5,
                'Comment' => 'Среднее значение рейтинга',
                'Not_Null',
            ],
        ],

        'clinicsWithRate' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Кол-во клиник с рейтингом',
                'Not_Null',
            ],
        ],

        'minDoctorRate' => [
            'Double',
            [
                'Default' => -1,
                'Comment' => 'Минимальный абсолютный рейтинг доктора',
                'Not_Null',
            ],
        ],

        'maxDoctorRate' => [
            'Double',
            [
                'Default' => 1,
                'Comment' => 'Максимальный абсолютный рейтинг доктора',
                'Not_Null',
            ],
        ],

        'avgDoctorRate' => [
            'Double',
            [
                'Default' => 5,
                'Comment' => 'Среднее значение рейтинга доктора',
                'Not_Null',
            ],
        ],

        'doctorsWithRate' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Кол-во докторов с рейтингом',
                'Not_Null',
            ],
        ],

        'minRatingComments' => [
            'Int',
            [
                'Default' => 5,
                'Comment' => 'Минимальное кол-во отзывов для включения в рейтинг',
                'Not_Null',
            ],
        ],

        'avgRatingComments' => [
            'Int',
            [
                'Default' => 6,
                'Comment' => 'Среднее количество отзывов',
                'Not_Null',
            ],
        ],

        'minRatingClinics' => [
            'Int',
            [
                'Default' => 20,
                'Comment' => 'Минимальное кол-во клиник для работы страницы рейтинга',
                'Not_Null',
            ],
        ],

        'hideCouponPage' => [
            'Tinyint',
            [
                'Default' => 0,
                'Comment' => 'Скрывать страницу скидок',
                'Not_Null',
            ],
        ],

        'hideDoctorSearch' => [
            'Tinyint',
            [
                'Default' => 0,
                'Comment' => 'Скрывать поиск по докторам',
                'Not_Null',
            ],
        ],

        'hideBanners' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Скрывать рекламу',
                'Not_Null',
            ],
        ],

        'hideAdlink' => [
            'Int',
            [
                'Default' => 1,
                'Comment' => 'Скрывать ссылку скрытия рекламы',
                'Not_Null',
            ],
        ],

        'showTeasersNew' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать Новые тизеры',
                'Not_Null',
            ],
        ],

        'moderatorsEmail' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Comment' => 'email модераторов для их уведомления',
                'Not_Null',
            ],
        ],

        'moderatorsCellPhoneNumber' => [
            'Varchar',
            [
                'Size'    => 155,
                'Default' => '',
                'Comment' => 'номера сотовых телефонов модераторов для их уведомления',
                'Not_Null',
            ],
        ],

        'latitude' => [
            'Double',
            [
                'Default' => 0,
                'Comment' => 'Геокоординаты (Долгота)',
                'Not_Null',
            ],
        ],

        'longitude' => [
            'Double',
            [
                'Default' => 0,
                'Comment' => 'Геокоординаты (Широта)',
                'Not_Null',
            ],
        ],

        'timezone' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Часовой пояс относительно UTC',
                'Not_Null',
            ],
        ],

        'dateDefaultTimezone' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'Часовой пояс для date_default_timezone_set()',
                'Not_Null',
            ],
        ],

        'Net_City__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Город из Net_City',
                'Not_Null',
            ],
        ],

        'kladr' => [
            'Varchar',
            [
                'Size'    => 30,
                'Comment' => 'Кладр',
                'Not_Null',
            ],
        ],

        'wmailCode' => [
            'Text',
            [
                'Comment' => 'Код верификации для mail вебмастера',
            ],
        ],

        'yandexVerification' => [
            'Text',
        ],

        'showArticles' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать статьи вместо промоблока',
                'Not_Null',
            ],
        ],

        'priority' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Приоритет в выдаче списка',
                'Not_Null',
            ],
        ],

        'cityDistrictPredlPadezh' => [
            'Varchar',
            [
                'Size' => 256,
                'Not_Null',
            ],
        ],

        'cityDistrictMPredlPadezh' => [
            'Varchar',
            [
                'Size' => 256,
                'Not_Null',
            ],
        ],

        'showPopup' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать попап',
                'Not_Null',
            ],
        ],

        'disabledOrder' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Отключить заявку на прием',
                'Not_Null',
            ],
        ],

        'limitOrder' => [
            'Int',
            [
                'Default' => 5,
                'Not_Null',
            ],
        ],

        'avgClinicWhiteRate' => [
            'Double',
            [
                'Default' => -100,
                'Comment' => 'средний рейтинг клиник для страницы whitelist',
                'Not_Null',
            ],
        ],

        'avgDoctorWhiteRate' => [
            'Double',
            [
                'Default' => -100,
                'Comment' => 'средний рейтинг докторов для страницы whitelist',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'ice_city_subdomain_index' => [
            'Key',
            ['subdomain'],
        ],

    ],
];