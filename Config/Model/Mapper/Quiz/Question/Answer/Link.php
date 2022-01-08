<?php

return [
    'comment' => 'Ответы квиза',
    'author' => 'petrov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор линка',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Quiz_Question__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор вопроса',
                'Not_Null',
            ],
        ],
        'Quiz_Answer__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор вопроса',
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