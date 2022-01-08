<?php

return [
    'comment' => 'Вопросы квиза',
    'author' => 'petrov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор вопроса',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Quiz__id' => [
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
                'Default' => '',
                'Comment' => 'Текст вопроса',
                'Not_Null',
            ],
        ],
        'Quiz_Question_Type__id' => [
            'Int',
            [
                'Comment' => 'Тип вопроса',
                'Not_Null',
            ],
        ],
        'position' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Очередность ответа',
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