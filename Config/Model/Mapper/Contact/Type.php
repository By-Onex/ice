<?php

return [
    'comment' => 'Типы контактов к моделям',

    'author' => 'Soynov',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор записи',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'model' => [
            'Varchar',
            [
                'Size'    => 128,
                'Comment' => 'Имя модели к типу',
                'Not_Null',
            ],
        ],

        'title' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Название типа контакта',
                'Not_Null',
            ],
        ],

        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Запись активна',
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