<?php

return [
    'comment' => 'Токены для установки пароля в кабинет клиники',

    'author' => 'Soynov',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'createdAt' => [
            'Datetime',
            [
                'Comment' => 'Создание',
                'Not_Null',
            ],
        ],

        'expirationAt' => [
            'Datetime',
            [
                'Comment' => 'Истечение',
                'Not_Null',
            ],
        ],

        'Clinic_Cabinet__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор кабинета',
                'Not_Null',
            ],
        ],

        'token' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Токен',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'Clinic_Cabinet__id' => [
            'Unique',
            ['Clinic_Cabinet__id'],
        ],

    ],
];