<?php

return [
    'comment' => 'Связь услуги с единицей измерения',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор записи',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Service__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор услуги',
                'Not_Null',
            ],
        ],

        'Service_Unit__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор единицы измерения',
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