<?php

return [
    'comment' => 'Расписание докторов',

    'author' => 'haosit',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'ID записи',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Clinic__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'ID клиники',
                'Not_Null',
            ],
        ],

        'Doctor__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'ID доктора',
                'Not_Null',
            ],
        ],

        'visitAt' => [
            'Datetime',
            [
                'Comment' => 'Дата приёма',
                'Not_Null',
            ],
        ],

        'duration' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Длительность в минутах',
                'Not_Null',
            ],
        ],

        'isBusy' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Занято',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'ice_doctor_time_table_Clinic__id_index' => [
            'Key',
            ['Clinic__id'],
        ],

        'ice_doctor_time_table_Doctor__id_index' => [
            'Key',
            ['Doctor__id'],
        ],

    ],
];