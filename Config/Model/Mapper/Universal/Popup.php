<?php

return [
    'comment' => 'Универсальный попап',

    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'id',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'header' => [
            'Text',
            [
                'Comment' => 'Заголовок',
                'Not_Null',
            ],
        ],

        'buttonText' => [
            'Text',
            [
                'Comment' => 'Текст кнопки',
                'Not_Null',
            ],
        ],

        'buttonLink' => [
            'Text',
            [
                'Comment' => 'Ссылка в кнопке(абсолютная)',
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