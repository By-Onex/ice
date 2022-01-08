<?php

return [
    'comment' => 'Таблица старых услуг',

    'author' => 'haosit',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'ID',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'oldTranslit' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'старое название услуги',
                'Not_Null',
            ],
        ],

        'Service__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'ID услуги',
            ],
        ],

        'createdAt' => [
            'Datetime',
            [
                'Comment' => 'Дата создания',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'ice_old_service_oldTranslit' => [
            'Key',
            ['oldTranslit'],
        ],

    ],
];