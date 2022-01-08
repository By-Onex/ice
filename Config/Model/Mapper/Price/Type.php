<?php

return [
    'author' => 'd.galdin',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
            ],
        ],
        'title' => [
            'Varchar',
            [
                'Size'    => 100,
                'Comment' => 'Название',
                'Not_Null',
            ],
        ],
        'name' => [
            'Varchar',
            [
                'Size'    => 100,
                'Comment' => 'Имя',
                'Not_Null',
            ],
        ],
        'aliasName' => [
            'Varchar',
            [
                'Size'    => 100,
                'Comment' => 'Имя-псевдонм',
                'Not_Null',
            ],
        ],
        'url' => [
            'Varchar',
            [
                'Size'    => 100,
                'Comment' => 'Ссылка',
                'Not_Null',
            ],
        ],
        'aliasUrl' => [
            'Varchar',
            [
                'Size'    => 100,
                'Comment' => 'Ссылка-псевдоним',
                'Not_Null',
            ],
        ],
        'text' => [
            'Text',
            [
                'Comment' => 'depricated',
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
