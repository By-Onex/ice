<?php

return [
    'comment' => 'Статистика докторов',
    'author' => 'petrov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Id',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Component_Comment__id' => [
            'Int',
            [
                'Comment' => 'id коммента',
                'Not_Null',
            ],
        ],
        'rating_1' => [
            'Int',
            [
                'Comment' => 'оценка характеристики',
                'Not_Null',
            ],
        ],
        'rating_2' => [
            'Int',
            [
                'Comment' => 'оценка характеристики',
                'Not_Null',
            ],
        ],
        'rating_3' => [
            'Int',
            [
                'Comment' => 'оценка характеристики',
                'Not_Null',
            ],
        ],
        'rating_4' => [
            'Int',
            [
                'Comment' => 'оценка характеристики',
                'Not_Null',
            ],
        ],
        'rating_5' => [
            'Int',
            [
                'Comment' => 'оценка характеристики',
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