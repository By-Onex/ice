<?php

return [
    'comment' => 'Связь награды c клиниками/докторами',
    'author' => 'petrov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Awards_Block__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Id награды на блоке',
                'Not_Null',
            ],
        ],
        'table' => [
            'Varchar',
            [
                'Size'    => 100,
                'Default' => '',
                'Comment' => 'Таблица с которой связана награда',
                'Not_Null',
            ],
        ],
        'rowId' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Id доктора/клиники',
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
