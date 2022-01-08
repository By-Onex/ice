<?php

return [
    'fields' => [
        'id' => [
            'Int',
            [
                'Size' => 11,
                'Comment' => 'Идентификатор записи.',
                'Not_Null',
            ],
        ],
        'title' => [
            'Varchar',
            [
                'Size' => 255,
                'Comment' => 'Заголовок стадии.',
                'Not_Null',
            ],
        ],
    ],
    'indexes' => [
        'id' => [
            'Primary',
            [
                'id',
            ],
        ],
    ],
];