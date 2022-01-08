<?php

return [
    'comment' => 'Сохранённые объекты автокеша',
    'author' => 'd.galdin',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'hash' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Хэш-ключ объекта кеша',
                'Not_Null',
            ],
        ],
        'name' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Название автокеша',
                'Not_Null',
            ],
        ],
        'serializedData' => [
            'Longtext',
            [
                'Comment' => 'Сериализованные данные',
                'Not_Null',
            ],
        ],
        'createdAt' => [
            'Datetime',
            [
                'Comment' => 'Время создания',
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
