<?php

return [
    'comment' => 'Образование докторов',

    'author' => 'paulwildboar <veprev-pavel@yandex.ru>',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Идентификатор',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Doctor__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Доктор',
                'Not_Null',
            ],
        ],

        'year' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Год получения образования',
                'Not_Null',
            ],
        ],

        'place' => [
            'Varchar',
            [
                'Size'    => 2048,
                'Default' => '',
                'Comment' => 'Описание (вуз, курс)',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'ice_doctor_education_Doctor__id_fk' => [
            'Key',
            ['Doctor__id'],
        ],

    ],
];