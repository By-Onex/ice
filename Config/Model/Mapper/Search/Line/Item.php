<?php

return [
    'comment' => 'Элементы для поиска одной строкой',
    'author' => 'd.galdin',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'ID',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'url' => [
            'Text',
            [
                'Comment' => 'Ссылка на страницу',
                'Not_Null',
            ],
        ],
        'title' => [
            'Text',
            [
                'Comment' => 'h1 на странице',
                'Not_Null',
            ],
        ],
        'Search_Line_Group__id' => [
            'Int',
            [
                'Comment' => 'ID группы',
                'Not_Null',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'ID города',
                'Not_Null',
            ],
        ],
        'score' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Параметр сортировки',
                'Not_Null',
            ],
        ],
        'haystack_mush' => [
            'Varchar',
            [
                'Size'    => 500,
                'Default' => '',
                'Comment' => 'Мешанина по которой идёт поиск',
                'Not_Null',
            ],
        ],
    ],
    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],
        'isli_cityId' => [
            'Key',
            ['City__id'],
        ],
    ],
];