<?php

return [
    'comment' => 'Таблица поднятия клиник в поиске по услугам',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'ID',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Clinic__id' => [
            'Int',
            [
                'Comment' => 'ID клиники',
            ],
        ],

        'Service__id' => [
            'Int',
            [
                'Comment' => 'ID услуги',
            ],
        ],

        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Активна',
                'Not_Null',
            ],
        ],

        'position' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Позиция в результах поиска',
                'Not_Null',
            ],
        ],

        'updatedAt' => [
            'Datetime',
            [
                'Comment' => 'Время обновления',
            ],
        ],

        'liftLink' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'есть поднятие',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'icsl_clinic_service' => [
            'Key',
            ['Clinic__id'],
        ],

    ],
];