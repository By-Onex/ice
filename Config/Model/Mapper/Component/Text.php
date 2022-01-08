<?php

return [
    'comment' => 'Привязанный текст',
    'fields' => [
        'id' => [
            'Int',
            [
                'Size' => 11,    
                'Comment' => 'Первичный ключ',    
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'table' => [
            'Varchar',
            [
                'Size' => 255,    
                'Comment' => 'Таблица',    
                'Not_Null',
            ],
        ],
        'rowId' => [
            'Varchar',
            [
                'Size'    => 64,
                'Default' => 0,    
                'Comment' => 'Запись',    
                'Not_Null',
            ],
        ],
        'title' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'Заголовок(тип)',
                'Not_Null',
            ]
        ],
        'text' => [
            'Text',
            [
                'Comment' => 'Text',
            ],
        ],
        'createdAt' => [
            'Datetime',
            [
                'Default' => 'CURRENT_TIMESTAMP',
                'Comment' => 'Дата создания',
                'Not_Null',
            ]
        ],
        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,    
                'Comment' => 'Активен',    
                'Not_Null',
            ],
        ],
    ],
    'indexes' => [
        'id' => [
            'Primary',
            [
                'id'        
            ],
        ],
    ],
];