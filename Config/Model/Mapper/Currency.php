<?php

return [
    'comment' => 'Валюта',
    'author' => 'Soynov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Size'    => 11,
                'Comment' => 'Идентификатор записи',
                'Not_Null',
            ],
        ],
        'codeChar' => [
            'Varchar',
            [
                'Size'    => 3,
                'Comment' => 'Буквенный код',
                'Not_Null',
            ],
        ],
        'codeNum' => [
            'Int',
            [
                'Size'    => 3,
                'Comment' => 'Числовой код',
                'Not_Null',
            ]
        ],
        'symbol' => [
            'Varchar',
            [
                'Size'    => 1,
                'Comment' => 'Знак Unicode',
                'Not_Null',
            ]
        ],
        'title' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Заголовок',
                'Not_Null',
            ]
        ],
        'titleShort' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Заголовок сокращённый',
                'Not_Null',
            ]
        ],
        'rTitle' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Заголовок в родительном падеже',
                'Not_Null',
            ]
        ],
        'rTitlePl' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Заголовок в родительном падеже множественной формы',
                'Not_Null',
            ]
        ],
        'pTitlePl' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'Заголовок в предложном падеже множественной формы',
                'Not_Null',
            ]
        ],
    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],
    ],
];