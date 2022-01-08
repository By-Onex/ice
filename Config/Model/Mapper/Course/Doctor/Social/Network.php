<?php

return [
    'comment' => 'Ссылки на социальные сети курсов',
    'author' => 'bogatov.es',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Id',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Course_Doctor__id' => [
            'Int',
            [
                'Comment' => 'Курс',
                'Not_Null',
            ],
        ],
        'Social_Network__id' => [
            'Int',
            [
                'Comment' => 'Социальная сеть',
                'Not_Null',
            ],
        ],
        'url' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Ссылка на соц.сеть',
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