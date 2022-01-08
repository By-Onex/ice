<?php

return [
    'author' => 'denis.d',

    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'id',
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'spb_id' => [
            'Int',
            [
                'Not_Null',
            ],
        ],

        'Mail_Template__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Использованный шаблон',
                'Not_Null',
            ],
        ],

        'address' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Адрес',
                'Not_Null',
            ],
        ],

        'toName' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Получатель',
                'Not_Null',
            ],
        ],

        'subject' => [
            'Text',
            [
                'Comment' => 'Тема',
                'Not_Null',
            ],
        ],

        'body' => [
            'Text',
            [
                'Comment' => 'Тело',
                'Not_Null',
            ],
        ],

        'time' => [
            'Datetime',
            [
                'Default' => '2000-01-01 00:00:00',
                'Comment' => 'Время создания',
                'Not_Null',
            ],
        ],

        'plannedAt' => [
            'Datetime',
            [
                'Comment' => 'Время запланированной отправки',
                'Not_Null',
            ],
        ],

        'sended' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Отправлено ли',
                'Not_Null',
            ],
        ],

        'sendTime' => [
            'Datetime',
            [
                'Default' => '2000-01-01 00:00:00',
                'Comment' => 'Время отправки',
                'Not_Null',
            ],
        ],

        'sendDay' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'День отправки от начала эры',
                'Not_Null',
            ],
        ],

        'sendTries' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Количество попыток отправки',
                'Not_Null',
            ],
        ],

        'toUserId' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Получатель - пользователь',
                'Not_Null',
            ],
        ],

        'mailProvider' => [
            'Varchar',
            [
                'Size'    => 50,
                'Comment' => 'Мейл провайдер',
                'Not_Null',
            ],
        ],

        'params' => [
            'Text',
            [
                'Comment' => 'Параметры мейл провайдера',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'index_sended' => [
            'Key',
            ['sended'],
        ],

    ],
];