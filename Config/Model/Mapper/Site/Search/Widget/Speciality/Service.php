<?php

return [
    'comment' => 'Для виджета Site_Search_Widget_Speciality_Service',
    'author' => 'd.galdin',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Speciality__id' => [
            'Int',
            [
                'Comment' => 'Специализация',
                'Not_Null',
            ],
        ],
        'Service__id' => [
            'Int',
            [
                'Comment' => 'Услуга',
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
