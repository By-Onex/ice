<?php

return [
    'author' => 'denis.d',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Первичный ключ',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Clinic__id' => [
            'Int',
            [
                'Default' => 0,
            ],
        ],

        'District__id' => [
            'Int',
            [
                'Default' => 0,
            ],
        ],

        'position' => [
            'Int',
        ],

        'updatedAt' => [
            'Datetime',
            [
                'Comment' => 'Дата обновления',
                'Not_Null',
            ],
        ],

        'liftLink' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'есть поднятие',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'updatedAt' => [
            'Key',
            ['updatedAt'],
        ],

    ],
];