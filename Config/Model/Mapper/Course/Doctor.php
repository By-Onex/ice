<?php

return [
    'admin' => [
        'rowPlugins' => [
            'General' => [
                'Admin_Plugin_Course_Doctor_Social_Networks' => [
                    'title' => 'Соцсети курса',
                    'tpl' => 'index',
                ],
                'Admin_Plugin_Link' => [
                    [
                        'title' => 'Лекторы курса',
                        'toModelName' => 'Lecturer',
                        'toModelNameField' => 'fio',
                    ],
                ]
            ],
        ],
    ],
    'comment' => 'Курс обучения доктора',
    'author' => 'Soynov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор',
                'Not_Null',
                'Auto_Increment',
                'Unsigned',
            ],
        ],
        'title' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Название',
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
        'active' => [
            'Tinyint',
            [
                'Comment' => 'Активность',
                'Not_Null',
                'Unsigned',
            ],
        ],
        'dateStart' => [
            'Datetime',
            [
                'Comment' => 'Дата начала',
                'Not_Null',
            ],
        ],
        'dateFinish' => [
            'Datetime',
            [
                'Comment' => 'Дата окончания',
                'Not_Null',
            ],
        ],
        'company' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Организация',
                'Not_Null',
            ],
        ],
        'speaker' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Лектор',
                'Not_Null',
            ],
        ],
        'phone' => [
            'Varchar',
            [
                'Size'    => 256,
                'Default' => '',
                'Comment' => 'Телефон',
                'Not_Null',
            ],
        ],
        'sourceURL' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Ссылка на источник',
                'Not_Null',
            ],
        ],
        'coverURL' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Ссылка на изображение обложки',
                'Not_Null',
            ],
        ],
        'price' => [
            'Int',
            [
                'Comment' => 'Цена',
                'Unsigned',
            ],
        ],
        'priceShare' => [
            'Int',
            [
                'Comment' => 'Акционная цена',
                'Unsigned',
            ],
        ],
        'Course_Format__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор формата курса',
                'Not_Null',
                'Unsigned',
            ],
        ],
        'Course_Doctor_Category__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор категории курса доктора',
                'Not_Null',
                'Unsigned',
            ],
        ],
        'isOnline' => [
            'Tinyint',
            [
                'Comment' => 'Онлайн проведение',
                'Not_Null',
                'Unsigned',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'Город проведения',
                'Not_Null',
            ],
        ],
        'position' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Позиция',
                'Not_Null',
            ],
        ],
        'discountDescription' => [
            'Text',
            [
                'Comment' => 'Описание акции курса',
                'Not_Null',
            ],
        ],
        'isPaid' => [
            'Tinyint',
            [
                'Default' => 0,
                'Comment' => 'Курс оплачен?',
                'Not_Null',
            ],
        ],
        'isPriority' => [
            'Tinyint',
            [
                'Default' => 0,
                'Comment' => 'Курс приоритетный?',
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