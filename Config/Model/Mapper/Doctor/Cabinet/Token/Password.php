<?php

return [
    'comment' => 'Токен для установки пароля кабинета доктора',

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
                'Comment' => 'Дата создания',
                'Not_Null',
            ],
        ],

        'expirationAt' => [
            'Datetime',
            [
                'Comment' => 'Дата истечения',
                'Not_Null',
            ],
        ],

        'Doctor_Cabinet__id' => [
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
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'Doctor_Cabinet__id' => [
            'Unique',
            ['Doctor_Cabinet__id'],
        ],

    ],
];