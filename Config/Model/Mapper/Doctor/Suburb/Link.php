<?php

return [
    'comment' => 'Связь доктора с пригородом',

    'author' => 'Soynov',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор связи',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Doctor__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор доктора',
                'Not_Null',
            ],
        ],

        'Suburb__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор пригорода',
                'Not_Null',
            ],
        ],

        'byClinic' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'От связанной клиники',
                'Not_Null',
            ],
        ],

        'createdAt' => [
            'Datetime',
            [
                'Comment' => 'Дата создания',
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