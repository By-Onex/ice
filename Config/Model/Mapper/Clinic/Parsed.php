<?php

return [
    'author' => 'bogatov.es',

    'fields' => [
        'id' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'Clinic__id' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'Clinic_Parsed_Status__id' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'similarClinicsJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'similarByCoordinatesJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'similarByShortNameJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'similarByAddressJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'similarByTelephoneJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'similarBySiteJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'similarByEmailJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'orgId' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'resource' => [
            'Varchar',
            [
                'Size'    => 45,
                'Comment' => 'С какого ресурса было спарсено',
                'Not_Null',
            ],
        ],

        'parsedId' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'hasPhotos' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'spb_id' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'Gender__id' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'old_name' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'name_prefix' => [
            'Varchar',
            [
                'Size' => 256,
                'Not_Null',
            ],
        ],

        'short_name' => [
            'Varchar',
            [
                'Size' => 256,
                'Not_Null',
            ],
        ],

        'name_suffix' => [
            'Varchar',
            [
                'Size' => 256,
                'Not_Null',
            ],
        ],

        'description' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'description_full' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'article' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'show_article' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'doctorOpinionArticleJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'address' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'proezd' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'telephone' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'snippetImageId' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
            ],
        ],

        'site' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'ceny' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Not_Null',
            ],
        ],

        'price_consult' => [
            'Varchar',
            [
                'Size'    => 100,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'price_in_medication' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'comment_count' => [
            'Varchar',
            [
                'Size' => 200,
                'Not_Null',
            ],
        ],

        'comment_positive' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'comment_votes' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'rating' => [
            'Double',
            [
                'Not_Null',
            ],
        ],

        'rating_place' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'District__id' => [
            'Int',
            [
                'Size' => 11,
            ],
        ],

        'ceny_text' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'redirect' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 1,
                'Not_Null',
            ],
        ],

        'email' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'hours' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'active' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 1,
                'Not_Null',
            ],
        ],

        'text1' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'text2' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'text3' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'rightTitle' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'rightText' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'right_HTML' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'show_teaser' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'action' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'top_list_banner_show' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'top_list_banner_HTML' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'top_position' => [
            'Tinyint',
            [
                'Size' => 4,
                'Not_Null',
            ],
        ],

        'positon' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'position_mainpage' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'position_right' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'hide_negative_comments' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'position_variant' => [
            'Char',
            [
                'Size'    => 13,
                'Default' => 'none',
                'Not_Null',
            ],
        ],

        'proezd_schema' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'note' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'User__id' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'Price_Type__id' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'createTime' => [
            'Datetime',
            [
                'Not_Null',
            ],
        ],

        'updateTime' => [
            'Datetime',
            [
                'Not_Null',
            ],
        ],

        'is_nc' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'user_telephone' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'user_fio' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'sms_phone' => [
            'Varchar',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'is_first_photo' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 1,
                'Not_Null',
            ],
        ],

        'sms_mobile' => [
            'Varchar',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'Clinic_Net__id' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'histPlacement' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'show_link' => [
            'Tinyint',
            [
                'Size' => 4,
                'Not_Null',
            ],
        ],

        'last_comment_time' => [
            'Datetime',
            [
                'Not_Null',
            ],
        ],

        'url' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'Clinic_Type__id' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'clinicTypeTitle' => [
            'Varchar',
            [
                'Size' => 92,
                'Not_Null',
            ],
        ],

        'metroJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'workTimeJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'priceCategoryTitle' => [
            'Varchar',
            [
                'Size' => 92,
                'Not_Null',
            ],
        ],

        'imageUrl' => [
            'Varchar',
            [
                'Size' => 255,
                'Not_Null',
            ],
        ],

        'hasImage' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'totalScore' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'stockCount' => [
            'Smallint',
            [
                'Size'    => 6,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'netCount' => [
            'Smallint',
            [
                'Size'    => 6,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'hasServiceWithPrice' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'City__id' => [
            'Int',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],

        'cityTitle' => [
            'Varchar',
            [
                'Size' => 200,
                'Not_Null',
            ],
        ],

        'longitude' => [
            'Decimal',
            [
                'Size'    => [
                    '16',
                    '13',
                ],
                'Default' => 0.0000000000000,
                'Not_Null',
            ],
        ],

        'latitude' => [
            'Decimal',
            [
                'Size'    => [
                    '16',
                    '13',
                ],
                'Default' => 0.0000000000000,
                'Not_Null',
            ],
        ],

        'hasBanner' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'closestClinicsJson' => [
            'Longtext',
            [
                'Not_Null',
            ],
        ],

        'doctorCount' => [
            'Smallint',
            [
                'Size'    => 6,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'hasServiceChild' => [
            'Tinyint',
            [
                'Size' => 4,
                'Not_Null',
            ],
        ],

        'isAwarded' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'isPaid' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'showPriceLink' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 1,
                'Not_Null',
            ],
        ],

        'hideSimilarDiscount' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'relationPosition' => [
            'Int',
            [
                'Size'    => 11,
                'Default' => 0,
            ],
        ],

        'positionUpdatedAt' => [
            'Datetime',
        ],

        'hasOrderTab' => [
            'Tinyint',
            [
                'Size'    => 4,
                'Default' => 1,
                'Not_Null',
            ],
        ],

        'vk' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Ссылка на вк',
            ],
        ],

        'facebook' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Ссылка на фейсбук',
            ],
        ],

        'twitter' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Ссылка на твиттер',
            ],
        ],

        'whiteRating' => [
            'Double',
            [
                'Default' => -100,
                'Comment' => 'Рейтинг для страницы whitelist',
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