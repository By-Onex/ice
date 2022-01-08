<?php

return [
    'comment' => 'Анкетирование при звонке',

    'author' => 'paulwildboar <veprev-pavel@yandex.ru>',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Идентификатор',
                'Not_Null',
                'Auto_Increment',
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

        'Phone_Feedback__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Идентификатор результата',
                'Not_Null',
            ],
        ],

        'ip' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'IP пользователя',
                'Not_Null',
            ],
        ],

        'createdAt' => [
            'Timestamp',
            [
                'Default' => 'CURRENT_TIMESTAMP',
                'Comment' => 'Дата-время',
                'Not_Null',
            ],
        ],

        'comment' => [
            'Varchar',
            [
                'Size'    => 4096,
                'Comment' => 'Подробное описание проблемы',
            ],
        ],

        'isModerated' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Промодерировано ли',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

    ],
];