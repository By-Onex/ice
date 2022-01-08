<?php

return [
    'comment' => 'страницы экспертного рейтинга',
    'author' => 'bogatov.es',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'идентификатор',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'id города',
                'Not_Null',
            ],
        ],
        'title' => [
            'Text',
            [
                'Comment' => 'заголовок рейтинга',
                'Not_Null',
            ],
        ],
        'siteTitle' => [
            'Text',
            [
                'Comment' => 'тайтл рейтинга',
                'Not_Null',
            ],
        ],
        'description' => [
            'Text',
            [
                'Comment' => 'дескрипшен рейтинга',
                'Not_Null',
            ],
        ],
        'text' => [
            'Text',
            [
                'Comment' => 'описание рейтинга',
                'Not_Null',
            ],
        ],
        'url' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'урл страницы',
                'Not_Null',
            ],
        ],
        'linkedRatingJSON' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'JSON с id свзяанных рейтингов',
                'Not_Null',
            ],
        ],
        'showAll' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'показывать на всех городах',
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
