<?php

return [
    'comment' => 'Коды мобильных телефонов городов',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'идентификатор',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'code' => [
            'Int',
            [
                'Comment' => 'телефонный код города',
                'Not_Null',
            ],
        ],

        'City__id' => [
            'Int',
            [
                'Comment' => 'id города',
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