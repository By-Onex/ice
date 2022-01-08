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
        'description' => [
            'Varchar',
            [
                'Size'    => 100,
                'Default' => '',
                'Comment' => 'Описание награды',
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
