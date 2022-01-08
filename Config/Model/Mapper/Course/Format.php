<?php

return [
    'comment' => 'Формат проведения обучающего курса',
    'author' => 'Soynov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Идентификатор',
                'Not_Null',
            ],
        ],
        'title' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Название',
                'Not_Null',
            ],
        ],
        'slug' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Часть ЧПУ',
                'Not_Null',
            ],
        ],
        'active' => [
            'Tinyint',
            [
                'Comment' => 'Активность',
                'Not_Null',
                'Unsigned',
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