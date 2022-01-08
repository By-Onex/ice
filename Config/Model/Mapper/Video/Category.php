<?php

return [
    'comment' => 'Категории видео',

    'author'  => 'paulwildboar <veprev-pavel@yandex.ru>',

    'fields'  => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Not_Null',
                'Auto_Increment',
                'Comment' => 'Идентификатор',
            ],
        ],

        'title' => [
            'Varchar',
            [
                'Size'    => 512,
                'Comment' => 'Название категории для клиники',
                'Not_Null',
            ],
        ],
        'drTitle' => [
            'Varchar',
            [
                'Size'    => 512,
                'Comment' => 'Название категории для врача',
                'Not_Null',
            ],
        ],
    ],
    'indexes' => [
        'id' => [
            'Primary',
            [
                'id',
            ],
        ],
    ],
];