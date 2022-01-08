<?php

return [
    'comment' => 'Результат анкетирования при звонке',

    'author' => 'paulwildboar <veprev-pavel@yandex.ru>',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Not_Null',
                'Auto_Increment',
                'Comment' => 'Идентификатор',
            ],
        ],

        'name' => [
            'Varchar',
            [
                'Size'    => 512,
                'Not_Null',
                'Comment' => 'Результат',
            ],
        ],
    ],
];