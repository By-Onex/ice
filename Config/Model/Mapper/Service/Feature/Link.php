<?php

return [
    'comment' => 'Связь услуги с особенностью(деталь)',

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

        'Service_Feature__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор особенности',
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