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
        'name' => [
            'Varchar',
            [
                'Size' => 64,
                'Comment' => 'Название',
                'Not_Null'
            ]
        ]
    ],
    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],
    ],
];