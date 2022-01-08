<?php

return [
    'comment' => 'Старые номера телефонов',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'id клиники',
                'Not_Null',
            ],
        ],

        'telephone' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Номера телефонов',
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