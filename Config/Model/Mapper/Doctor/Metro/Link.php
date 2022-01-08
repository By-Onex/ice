<?php

return [
    'comment' => 'Связь докторов и метро',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'id',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Doctor__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'id доктора',
                'Not_Null',
            ],
        ],

        'Metro__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'id метро',
                'Not_Null',
            ],
        ],

        'sort' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Comment' => 'порядок метро',
                'Not_Null',
            ],
        ],

        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Comment' => 'активна',
                'Not_Null',
            ],
        ],

        'position' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'фиксированная позиция в результатх поиска по метро',
                'Not_Null',
            ],
        ],

        'updatedAt' => [
            'Datetime',
            [
                'Comment' => 'Дата обновления',
            ],
        ],

        'doctorMetro' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'метро добавлено от доктора',
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