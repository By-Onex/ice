<?php

return [
    'comment' => 'Ответы пользователей',
    'author' => 'petrov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор лога',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'createdAt' => [
            'Datetime',
            [
                'Comment' => 'Дата создания',
                'Not_Null',
            ],
        ],
        'FIO' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'ФИО прошедшего квиз',
                'Not_Null',
            ],
        ],
        'contactNumber' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Номер прошедшего квиз',
                'Not_Null',
            ],
        ],
        'answersJSON' => [
            'Text',
            [
                'Comment' => 'Ответы прошедшего квиз',
                'Not_Null',
            ],
        ],
        'priceTypeId' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'id типа клиники',
                'Not_Null',
            ],
        ],
        'priceTypeText' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Comment' => 'Тип клиники',
                'Not_Null',
            ],
        ],
        'districtId' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'id района',
                'Not_Null',
            ],
        ],
        'districtText' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Comment' => 'Название района',
                'Not_Null',
            ],
        ],
        'clinicIdsJson' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Список клиник, куда отправился квиз',
                'Not_Null',
            ],
        ],
        'emailsJson' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Список мыл, на которые ушел квиз',
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