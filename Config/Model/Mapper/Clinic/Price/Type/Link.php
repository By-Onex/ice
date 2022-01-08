<?php

return [
    'comment' => 'уведомления пользователей',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Clinic__id' => [
            'Int',
            [
                'Not_Null',
            ],
        ],

        'Price_Type__id' => [
            'Int',
            [
                'Comment' => 'id ценовой категории',
                'Not_Null',
            ],
        ],

        'position' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'позиция',
                'Not_Null',
            ],
        ],

        'liftLink' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
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

    ],
];