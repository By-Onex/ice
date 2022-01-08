<?php

return [
    'author' => 'd.galdin',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'day' => [
            'Varchar',
            [
                'Size' => 50,
            ],
        ],
        'fromDate' => [
            'Time',
        ],
        'toDate' => [
            'Time',
        ],
        'Clinic__id' => [
            'Int',
        ],
        'allday' => [
            'Int',
            [
                'Comment' => 'Флаг: работет весь день',
                'Not_Null',
            ],
        ],
        'weekend' => [
            'Int',
            [
                'Comment' => 'Флаг: выходной',
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