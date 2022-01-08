<?php

return [
    'comment' => 'связь клинк с экспертным рейтингом',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'идентификатор',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Clinic__id' => [
            'Int',
            [
                'Comment' => 'id клиники',
                'Not_Null',
            ],
        ],

        'Expert_Rating__id' => [
            'Int',
            [
                'Comment' => 'id экспертного рейтинга',
                'Not_Null',
            ],
        ],

        'position' => [
            'Int',
            [
                'Comment' => 'место в рейтинге',
                'Not_Null',
            ],
        ],

        'text' => [
            'Varchar',
            [
                'Size'    => 500,
                'Default' => '',
                'Comment' => 'текст при выводе рейтинга',
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