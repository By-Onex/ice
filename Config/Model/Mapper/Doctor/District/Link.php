<?php

return [
    'comment' => 'Связь докторов и районов',

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

        'District__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'id района',
                'Not_Null',
            ],
        ],

        'position' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'фиксированная позиция в результатх поиска по району',
                'Not_Null',
            ],
        ],

        'updatedAt' => [
            'Datetime',
            [
                'Comment' => 'Дата обновления',
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