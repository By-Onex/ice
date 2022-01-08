<?php

return [
    'comment' => 'Связь контакта с типом контакта',

    'author' => 'Soynov',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор записи',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Contact__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор контакта',
                'Not_Null',
            ],
        ],

        'Contact_Type__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор типа контакта',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'ice_contact_type_link_index_link' => [
            'Unique',
            ['Contact__id'],
        ],

    ],
];