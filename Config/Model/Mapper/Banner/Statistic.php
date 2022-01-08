<?php

return [
    'comment' => 'Статистика по баннерам',
    'author' => 'petrov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Clinic__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор клиники',
                'Not_Null',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор города',
                'Not_Null',
            ],
        ],
        'number' => [
            'Int',
            [
                'Comment' => 'Номер баннера',
                'Not_Null',
            ],
        ],
        'time' => [
            'Timestamp',
            [
                'Default' => 'CURRENT_TIMESTAMP',
                'Comment' => 'Дата-время',
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