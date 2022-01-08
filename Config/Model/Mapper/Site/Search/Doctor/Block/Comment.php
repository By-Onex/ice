<?php

return [
    'author' => 'petrov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'id',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'id города',
                'Not_Null',
            ],
        ],
        'author' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Автор коментарий',
                'Not_Null',
            ],
        ],
        'text' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Текст коментария',
                'Not_Null',
            ],
        ],
        'rate' => [
            'Int',
            [
                'Comment' => 'Рейтинг коментария',
                'Not_Null',
            ],
        ],
        'createdAt' => [
            'Datetime',
            [
                'Comment' => 'Дата добавления',
                'Not_Null',
            ],
        ],
        'siteUrl' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Ссылка на коментарий',
                'Not_Null',
            ],
        ],
        'doctorName' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Название клиники',
                'Not_Null',
            ],
        ],
        'Doctor__id' => [
            'Int',
            [
                'Comment' => 'Id клиники/доктора, на котором расположен коммент',
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
