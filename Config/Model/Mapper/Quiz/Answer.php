<?php

return [
    'comment' => 'Ответы квиза',
    'author' => 'petrov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор ответа',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Quiz_Question__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор квиза',
                'Not_Null',
            ],
        ],
        'text' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Текст ответа',
                'Not_Null',
            ],
        ],
        'description' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Описание ответа',
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