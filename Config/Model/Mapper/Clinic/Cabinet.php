<?php

return [
    'comment' => 'Личный кабинет клиники',

    'author' => 'Soynov',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Идентификатор записи',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'createdAt' => [
            'Datetime',
            [
                'Comment' => 'Создание записи',
                'Not_Null',
            ],
        ],

        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Активна',
                'Not_Null',
            ],
        ],

        'Clinic__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Идентификатор клиники',
                'Not_Null',
            ],
        ],

        'lastActiveAt' => [
            'Datetime',
            [
                'Comment' => 'Последнее посещение',
                'Not_Null',
            ],
        ],

        'password' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => 0,
                'Comment' => 'Пароль',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'Clinic__id' => [
            'Unique',
            ['Clinic__id'],
        ],

    ],
];