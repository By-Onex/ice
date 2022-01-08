<?php

return [
    'comment' => 'Видео',

    'author' => 'paulwildboar <veprev-pavel@yandex.ru>',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Идентификатор',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'table' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Таблица',
                'Not_Null',
            ],
        ],

        'rowId' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'id записи',
                'Not_Null',
            ],
        ],

        'videoId' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'Id видео',
                'Not_Null',
            ],
        ],

        'title' => [
            'Varchar',
            [
                'Size'    => 1024,
                'Default' => '',
                'Comment' => 'Заголовок видео',
                'Not_Null',
            ],
        ],

        'Video_Category__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Категория видео',
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