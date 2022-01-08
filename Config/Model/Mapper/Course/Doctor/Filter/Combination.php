<?php

return [
    'comment' => 'Допустимые комбинации фильтров на списке курсов',
    'author' => 'd.galdin',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'courseCity' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Идентификаторы возможных городов',
                'Not_Null',
            ],
        ],
        'courseFormat' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Идентификаторы воможных значений форматов курса',
                'Not_Null',
            ],
        ],
        'courseOnline' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => '1 для онлайн курсов, 0 для оффлайн',
                'Not_Null',
            ],
        ],
        'courseDoctorCategory' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Идентификаторы возможных направлений подготовки',
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