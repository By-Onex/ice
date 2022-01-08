<?php

return [
    'comment' => 'Доктор из внешнего ресурса',
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
        'Doctor__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Идентификатор доктора',
                'Not_Null',
            ],
        ],
        'createdAt' => [
            'Datetime',
            [
                'Default' => 'CURRENT_TIMESTAMP',
                'Comment' => 'Дата создания',
                'Not_Null',
            ],
        ],
        'parsedAt' => [
            'Datetime',
            [
                'Comment' => 'Дата сбора данных',
                'Not_Null',
            ],
        ],
        'isChecked' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Проверено',
                'Not_Null',
            ],
        ],
        'fio' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Полное имя',
                'Not_Null',
            ],
        ],
        'link' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Адрес ресурса(ссылка)',
                'Not_Null',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор города из ресурса',
                'Not_Null',
            ],
        ],
        'dataJSON' => [
            'Text',
            [
                'Comment' => 'Данные из ресурса',
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