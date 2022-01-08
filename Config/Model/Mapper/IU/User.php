<?php

return [
    'author' => 'By-Onex <ivan.marchenko.199@gmail.com>',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'name' => [
            'Varchar',
            [
                'Size' => 100,
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
