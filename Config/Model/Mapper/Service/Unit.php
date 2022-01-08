<?php

return [
    'comment' => 'Единица измерения для услуги',

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

        'name' => [
            'Varchar',
            [
                'Size'    => 128,
                'Comment' => 'Название единицы измерения',
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