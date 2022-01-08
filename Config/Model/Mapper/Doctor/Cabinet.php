<?php

return [
    'comment' => 'Личный кабинет доктора',

    'author' => 'Soynov',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор записи',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'createdAt' => [
            'Datetime',
            [
                'Default' => 'CURRENT_TIMESTAMP',
                'Comment' => 'Дата создания',
                'Not_Null',
            ],
        ],

        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Активно',
                'Not_Null',
            ],
        ],

        'Doctor__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор доктора',
                'Not_Null',
            ],
        ],

        'lastActiveAt' => [
            'Datetime',
            [
                'Comment' => 'Дата последней активности',
                'Not_Null',
            ],
        ],

        'password' => [
            'Varchar',
            [
                'Size'    => 255,
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

        'Doctor__id' => [
            'Unique',
            ['Doctor__id'],
        ],

    ],
];