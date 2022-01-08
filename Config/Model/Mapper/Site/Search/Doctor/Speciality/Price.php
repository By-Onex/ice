<?php

return [
    'comment' => 'Цены на прием по специализациям',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'City__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор города',
                'Not_Null',
            ],
        ],

        'Doctor_Speciality__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор специализации',
                'Not_Null',
            ],
        ],

        'minPrice' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Минимальная цена',
                'Not_Null',
            ],
        ],

        'maxPrice' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Максимальная цена',
                'Not_Null',
            ],
        ],

        'avgPrice' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Средняя цена',
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