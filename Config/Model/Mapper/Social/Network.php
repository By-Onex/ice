<?php

return [
    'comment' => 'Социальная сеть',
    'author' => 'vyacheslav.prog <6849360-vyacheslav.prog@users.noreply.gitlab.com>',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор',
                'Not_Null',
                'Unsigned',
            ],
        ],
        'name' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Название',
                'Not_Null',
            ],
        ],
        'active' => [
            'Tinyint',
            [
                'Comment' => 'Активна',
                'Not_Null',
                'Unsigned',
            ],
        ],
        'placeholder' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Заполнитель',
                'Not_Null',
            ],
        ],
        'icon' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Код иконки',
                'Not_Null',
            ],
        ],
        'prefixLink' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Префикс перенаправления',
            ],
        ],
        'prefixLinkMobile' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Префикс перенаправления для мобильного клиента',
            ],
        ],
        'url' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Ссылка на социальную сеть',
            ],
        ],
        'type' => [
            'Varchar',
            [
                'Size'    => 8,
                'Comment' => 'Тип адреса',
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
