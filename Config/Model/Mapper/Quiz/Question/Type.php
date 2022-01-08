<?php

return [
    'fields' => [
        'id' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'text' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null'
            ]
        ],
        'template' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null'
            ]
        ],
    ],
    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],
    ],
];