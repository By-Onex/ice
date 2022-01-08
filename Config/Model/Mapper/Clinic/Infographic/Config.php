<?php

return [
    'comment' => 'Конфигуратор инфографики клиники',

    'author' => 'haosit',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Id',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Clinic__id' => [
            'Int',
            [
                'Comment' => 'Клиника',
                'Not_Null',
            ],
        ],

        'showAvgDoctorExperience' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать: Средний стаж врачей',
                'Not_Null',
            ],
        ],

        'showAvgDoctorRating' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать: Средний рейтинг врачей',
                'Not_Null',
            ],
        ],

        'showCloseToMetro' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать: Близко от метро',
                'Not_Null',
            ],
        ],

        'showCountAcademic' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать: Количество врачей с учёной степенью',
                'Not_Null',
            ],
        ],

        'showCountBranch' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать: Количество филиалов',
                'Not_Null',
            ],
        ],

        'showCountCategory' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать: Количество врачей высшей категории',
                'Not_Null',
            ],
        ],

        'showCountDoctor' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать: Количество докторов',
                'Not_Null',
            ],
        ],

        'showSevenDays' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать: Без выходных',
                'Not_Null',
            ],
        ],

        'showFoundation' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать: Год начала работы',
                'Not_Null',
            ],
        ],

        'showNonstop' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать: Круглосуточно',
                'Not_Null',
            ],
        ],

        'showManyReviews' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать много отзывов',
                'Not_Null',
            ],
        ],

        'showFreeAdvice' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать бесплатную консультацию',
                'Not_Null',
            ],
        ],

        'showWithoutPain' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать лечение без боли',
                'Not_Null',
            ],
        ],

        'showHasChildCabinet' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать есть детский кабинет',
                'Not_Null',
            ],
        ],

        'showHasChildRoom' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать детский уголок',
                'Not_Null',
            ],
        ],

        'showHasXray' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать есть рентген',
                'Not_Null',
            ],
        ],

        'showHasTomography' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать есть компьютерный томограф',
                'Not_Null',
            ],
        ],

        'showPartPay' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать лечение в рассрочку',
                'Not_Null',
            ],
        ],

        'showCountDiscount' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать кол-во акций',
                'Not_Null',
            ],
        ],

        'showOwnDentalLab' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать своя зуботехническая лаборатория',
                'Not_Null',
            ],
        ],

        'showHasMicroscope' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать есть микроскоп',
                'Not_Null',
            ],
        ],

        'showHealingOms' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать лечение по ОМС',
                'Not_Null',
            ],
        ],

        'showHealingDms' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать лечение по ДМС',
                'Not_Null',
            ],
        ],

        'showDentistryForPregnant' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать стоматология для беременных',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'ice_clinic_infographic_config_Clinic__id_index' => [
            'Key',
            ['Clinic__id'],
        ],

    ],
];