<?php

return [
    'comment' => 'Таблица альтернативных названий для услуг',

    'author' => 'haosit',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'ID',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Service__id' => [
            'Int',
            [
                'Comment' => 'ID сервиса',
                'Not_Null',
            ],
        ],

        'alt1' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'альтернативное название 1',
                'Not_Null',
            ],
        ],

        'alt2' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'альтернативное название 2',
                'Not_Null',
            ],
        ],

        'alt3' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'альтернативное название 3',
                'Not_Null',
            ],
        ],

        'alt4' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'альтернативное название 4',
                'Not_Null',
            ],
        ],

        'alt5' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'альтернативное название 5',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'Service__id' => [
            'Unique',
            ['Service__id'],
        ],

    ],
];