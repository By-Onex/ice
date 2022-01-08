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
        'Doctor__id' => [
            'Int',
            [
                'Comment' => 'Id доктора',
                'Not_Null',
            ],
        ],
        'Clinic__id' => [
            'Int',
            [
                'Comment' => 'Id клиники',
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
        'Doctor_Statistic_Goal__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'идентификатор действия (model defined)',
                'Not_Null',
            ],
        ],
        'referrer' => [
            'Varchar',
            [
                'Size'    => 512,
                'Default' => '',
                'Comment' => 'Реферрер страницы',
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