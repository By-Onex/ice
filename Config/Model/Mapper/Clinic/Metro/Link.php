<?php

return [
    'admin' => [
        'fields' => [
            'id',
            'Clinic__id',
            'Metro__id',
        ],
        'limit' => '30',
    ],

    'signals' => [
        'onCreate' => [
            'modelModerate',
        ],
        'beforeDelete' => 'modelModerate',
        'afterDelete' => 'Model_Driver_Back',
        'beforeUpdate' => 'modelModerate',
        'afterUpdate' => 'Model_Driver_Back',
    ],

    'comment' => 'Связь клиник и метро',

    'author' => 'denis.d',

    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Clinic__id' => [
            'Int',
        ],

        'Metro__id' => [
            'Int',
        ],

        'sort' => [
            'Int',
            [
                'Default' => 1,
                'Comment' => 'Порядок следования метро в описании клиники',
                'Not_Null',
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
                'Comment' => 'Фиксированная позиция в результатх поиска по метро',
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

        'id_clinic' => [
            'Key',
            ['Clinic__id'],
        ],

        'id_metro' => [
            'Key',
            ['Metro__id'],
        ],

        'sort' => [
            'Key',
            ['sort'],
        ],

        'updatedAt' => [
            'Key',
            ['updatedAt'],
        ],

    ],
];