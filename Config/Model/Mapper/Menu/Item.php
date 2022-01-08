<?php

return [
    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'title' => [
            'Varchar',
            [
                'Size'    => 96,
                'Comment' => 'Заголовок',
                'Not_Null',
            ],
        ],

        'name' => [
            'Varchar',
            [
                'Size'    => 96,
                'Default' => 'Simple',
                'Comment' => 'Внутренне имя',
                'Not_Null',
            ],
        ],

        'url' => [
            'Varchar',
            [
                'Size'    => 96,
                'Comment' => 'Урл',
                'Not_Null',
            ],
        ],

        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Активно',
                'Not_Null',
            ],
        ],

        'sort' => [
            'Smallint',
            [
                'Size'    => 6,
                'Comment' => 'Сортировка',
                'Not_Null',
            ],
        ],

        'icon' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Comment' => 'Ссылка на иконку',
                'Not_Null',
            ],
        ],

        'class' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Comment' => 'Класс для блока',
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