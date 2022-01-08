<?php

return [
    'comment' => 'Альтернативные услуги',
    'author' => 'bogatov.es',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'id',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Service__id' => [
            'Int',
            [
                'Comment' => 'id основной услуги',
                'Not_Null',
            ],
        ],
        'alt1' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'id альетрнативной услуги 1',
                'Not_Null',
            ],
        ],
        'alt2' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'id альетрнативной услуги 2',
                'Not_Null',
            ],
        ],
        'alt3' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'id альетрнативной услуги 3',
                'Not_Null',
            ],
        ],
        'alt4' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'id альтернативной услуги 4',
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
