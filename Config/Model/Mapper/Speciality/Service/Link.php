<?php

return [
    'comment' => 'Связь специализаций и услуг',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Id',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Doctor_Speciality__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Id специализации',
                'Not_Null',
            ],
        ],

        'Service__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Id услуги',
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