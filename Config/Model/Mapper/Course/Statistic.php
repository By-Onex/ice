<?php

return [
    'comment' => 'Статистика курсов',
    'author' => 'd.galdin',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'id',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Course_Doctor__id' => [
            'Int',
            [
                'Comment' => 'id курса',
                'Not_Null',
            ],
        ],
        'Course_Statistic_Goal__id' => [
            'Int',
            [
                'Comment' => 'id цели',
                'Not_Null',
            ],
        ],
        'userUuid' => [
            'Varchar',
            [
                'Size'    => 36,
                'Comment' => 'Uuid пользователя из печеньки',
                'Not_Null',
            ],
        ],
        'time' => [
            'Timestamp',
            [
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