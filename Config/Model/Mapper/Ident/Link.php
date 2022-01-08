<?php

return [
    'comment' => 'Связи интеграции с IDENT',

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

        'table' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'Связываемая модель',
                'Not_Null',
            ],
        ],

        'Clinic__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'ID искомой клиники',
                'Not_Null',
            ],
        ],

        'rowId' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'ID связи(может быть 0)',
                'Not_Null',
            ],
        ],

        'identId' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'ID для интеграции',
                'Not_Null',
            ],
        ],

        'name' => [
            'Text',
            [
                'Comment' => 'Имя для сопоставления с IDENT',
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