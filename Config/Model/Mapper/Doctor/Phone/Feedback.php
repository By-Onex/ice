<?php

return [
    'comment' => 'Анкетирование при звонке',
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
        'Doctor__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор доктора',
                'Not_Null',
            ],
        ],
        'Phone_Feedback__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор результата',
                'Not_Null',
            ],
        ],
        'ip' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'IP пользователя',
                'Not_Null',
            ],
        ],
        'createdAt' => [
            'Timestamp',
            [
                'Default' => 'CURRENT_TIMESTAMP',
                'Comment' => 'Дата-время',
                'Not_Null',
            ],
        ],
        'comment' => [
            'Varchar',
            [
                'Size'    => 4096,
                'Comment' => 'Подробное описание проблемы',
            ],
        ],
        'isModerated' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Промодерировано ли',
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