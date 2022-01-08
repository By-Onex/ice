<?php

return [
    'comment' => 'Связь услуг и стратегий инфографики',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор связи',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Service__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор сервиса',
                'Not_Null',
            ],
        ],

        'Clinic_Infographic__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор стратегии инфографики',
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