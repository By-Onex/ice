<?php

return [
    'comment' => 'Новая вторая форма фидбека',
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
        'rate' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'оценка пользователя',
                'Not_Null',
            ],
        ],
        'comment' => [
            'Varchar',
            [
                'Size'    => 4096,
                'Default' => '',
                'Comment' => 'отзыв пользователя',
                'Not_Null',
            ],
        ],
        'url' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Comment' => 'на какой странице оставили фидбек',
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
        'Feedback_Status__id' => [
            'Int',
            [
                'Default' => 1,
                'Comment' => 'Проверено ли',
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
