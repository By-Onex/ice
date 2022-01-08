<?php

return [
    'author' => 'By-Onex <ivan.marchenko.199@gmail.com>',
    'fields' => [
        'id' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'IU_User__id' => [
            'Int',
            [
                'Not_Null',
            ],
        ],
        'title' => [
            'Varchar',
            [
                'Size' => 33,
                'Not_Null',
            ],
        ],
        'body' => [
            'Varchar',
            [
                'Size' => 225,
                'Not_Null',
            ],
        ],
    ],
    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],
        'IU_User__id_idx' => [
            'Key',
            ['IU_User__id'],
        ],
    ],
];
