<?php

return [
    'fields' => [
        'id' => [
            'Int',
            [
                'Size' => '11',
                'Not_Null',
                'Auto_Increment'
            ]
        ],
        'name' => [
            'Varchar',
            [
                'Size' => '64',
                'Not_Null'
            ]
        ]
    ],
    'indexes' => [
        'id' => [
            'Primary',
            [
                'id'
            ]
        ]
    ]
];