<?php

return [
    'comment' => 'Статистика кликов по соц сетям',
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
        'table' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'модель',
                'Not_Null',
            ],
        ],
        'rowId' => [
            'Int',
            [
                'Comment' => 'Id модели',
                'Not_Null',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'Id города',
                'Not_Null',
            ],
        ],
        'time' => [
            'Timestamp',
            [
                'Default' => 'CURRENT_TIMESTAMP',
                'Comment' => 'Время',
                'Not_Null',
            ],
        ],
        'socialNetworkName' => [
            'Varchar',
            [
                'Size'    => 64,
                'Default' => 0,
                'Comment' => 'название соц сети',
                'Not_Null',
            ],
        ],
        'Social_Network__id' => [
            'Int',
            [
                'Comment' => 'Id соц сети (Model_Defined)',
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