<?php

return [
    'signals' => [
        'onCreate' => [
            'modelModerate',
        ],
    ],

    'comment' => 'Таблица соответствий клиник и врачей',

    'author' => 'denis.d',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Первичный ключ',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'spb_id' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'Doctor__id' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
            ],
        ],

        'Clinic__id' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
            ],
        ],

        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Активна',
                'Not_Null',
            ],
        ],

        'duration' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'Продолжительность работы',
            ],
        ],

        'atDate' => [
            'Date',
        ],

        'toDate' => [
            'Date',
        ],
        'priceOfAdmission' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Цена приёма',
            ]
        ],

        'sort' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Comment' => 'Сортировка',
            ],
        ],

        'position' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Comment' => 'позиция клиники на странице доктора',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'doctor' => [
            'Key',
            ['Doctor__id'],
        ],

        'clinic' => [
            'Key',
            ['Clinic__id'],
        ],

        'clinic_doctor' => [
            'Key',
            ['Doctor__id'],
        ],

    ],
];