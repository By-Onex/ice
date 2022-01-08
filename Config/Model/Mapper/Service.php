<?php

return [
    'admin' => [
        'fields' => [
            'id',
            'name',
            'parentId',
        ],
        'includes' => [
            'parentId' => 'Service',
        ],
        'limitators' => [
            'parentId',
        ],
        'links' => [
            'id',
            'name',
        ],
        'rowPlugins' => [
            'Top' => [
                'Admin_Plugin_Service_Answer' => [
                    'title' => 'Привязанные ответы консультанта',
                    'tpl' => 'index',
                ],
            ],
        ],
    ],
    'comment' => 'Услуги',
    'author' => 'denis.d',
    'fields' => [
        'id' => [
            'Int',
            [
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
        'name' => [
            'Varchar',
            [
                'Size'    => 100,
                'Comment' => 'Название услуги или группы услуг',
            ],
        ],
        'description' => [
            'Text',
            [
                'Comment' => 'Описание услуги',
                'Not_Null',
            ],
        ],
        'parentId' => [
            'Smallint',
            [
                'Comment' => 'ID группы услуг',
                'Not_Null',
            ],
        ],
        'articleUrl' => [
            'Varchar',
            [
                'Size'    => 250,
                'Comment' => 'Статья соответствующая услуге',
            ],
        ],
        'translit' => [
            'Varchar',
            [
                'Size'    => 100,
                'Comment' => 'Транслит названия',
            ],
        ],
        'contentJson' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Статьи услуги в json',
                'Not_Null',
            ],
        ],
        'contentId' => [
            'Int',
            [
                'Comment' => 'Ид статьи для ссылок',
                'Not_Null',
            ],
        ],
        'minPrice' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'минимальная цена',
                'Not_Null',
            ],
        ],
        'tipText' => [
            'Text',
            [
                'Comment' => 'Уточняющий текст для услуг',
                'Not_Null',
            ],
        ],
        'clearUrlOnWhitelist' => [
            'Int',
            [
                'Default' => 1,
                'Comment' => 'Использовать ЧПУ на странице рейтингов',
                'Not_Null',
            ],
        ],
        'showOnMain' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Показывать в перелинковке на главной',
                'Not_Null',
            ],
        ],
        'showInOtzyv' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Показывать в разделе отзывов',
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
