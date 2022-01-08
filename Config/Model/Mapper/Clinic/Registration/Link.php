<?php

return [
    'comment' => 'Клиники с регистрации',

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

        'Clinic__id' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Comment' => 'Идентификатор клиники',
                'Not_Null',
            ],
        ],

        'createdAt' => [
            'Datetime',
            [
                'Comment' => 'Запись добавлена',
                'Not_Null',
            ],
        ],

        'isChecked' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Проверена',
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