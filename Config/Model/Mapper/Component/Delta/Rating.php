<?php

return [
    'author' => 'd.galdin',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'table' => [
            'Varchar',
            [
                'Size'    => 128,
                'Comment' => 'Таблица относящейся сущности',
            ],
        ],
        'rowId' => [
            'Int',
            [
                'Comment' => 'Идентификатор относящейся сущности',
                'Not_Null',
            ],
        ],
        'prevPosition' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Предыдущая позиция в рейтинге',
                'Not_Null',
            ],
        ],
        'delta' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Разница в позиции',
                'Not_Null',
            ],
        ],
        'updatedAt' => [
            'Timestamp',
            [
                'Default' => '0000-00-00 00:00:00',
                'Comment' => 'Время последнего обновления',
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
