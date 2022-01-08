<?php

return [
    'comment' => 'Сео-текста по услугам',

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

        'Service__id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Идентификатор услуги',
                'Not_Null',
            ],
        ],

        'text' => [
            'Text',
            [
                'Comment' => 'Сео-текст',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'ice_service_seo_text_Service__id_fk' => [
            'Key',
            ['Service__id'],
        ],

    ],
];