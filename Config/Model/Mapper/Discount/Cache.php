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
        'Discount__id' => [
            'Int',
            [
                'Comment' => 'id акции',
                'Not_Null',
            ],
        ],
        'discount' => [
            'Varchar',
            [
                'Size'    => 50,
                'Comment' => 'Размер скидки',
                'Not_Null',
            ],
        ],
        'priority' => [
            'Int',
            [
                'Comment' => 'Приоритет купона в списке',
                'Not_Null',
            ],
        ],
        'inRightColumn' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Comment' => 'Показывать в правой колонке?',
                'Not_Null',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'Город',
                'Not_Null',
            ],
        ],
        'price' => [
            'Varchar',
            [
                'Size'    => 50,
                'Comment' => 'Цена обычная',
                'Not_Null',
            ],
        ],
        'priceShare' => [
            'Varchar',
            [
                'Size'    => 50,
                'Comment' => 'Цена по акции',
                'Not_Null',
            ],
        ],
        'title' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Заголовок акции',
                'Not_Null',
            ],
        ],
        'finishDate' => [
            'Date',
            [
                'Comment' => 'Дата окончания акции',
                'Not_Null',
            ],
        ],
        'text' => [
            'Text',
            [
                'Comment' => 'Текст',
                'Not_Null',
            ],
        ],
        'createdAt' => [
            'Date',
            [
                'Comment' => 'Дата создания',
                'Not_Null',
            ],
        ],
        'showCoupon' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Comment' => 'Показывать купон для печати?',
                'Not_Null',
            ],
        ],
        'Discount_Type__id' => [
            'Int',
            [
                'Comment' => 'id типа акции или скидки',
                'Not_Null',
            ],
        ],
        'discountViewTypeTitle' => [
            'Varchar',
            [
                'Size'    => 50,
                'Comment' => 'Заголовок типа акции или скидки для отображения',
                'Not_Null',
            ],
        ],
        'discountTypeUrl' => [
            'Varchar',
            [
                'Size'    => 50,
                'Comment' => 'url типа акции или скидки',
                'Not_Null',
            ],
        ],
        'parentDiscountTypeId' => [
            'Int',
            [
                'Comment' => 'id родительского типа',
                'Not_Null',
            ],
        ],
        'parentDiscountTypeTitle' => [
            'Varchar',
            [
                'Size'    => 50,
                'Comment' => 'Название родительского типа',
                'Not_Null',
            ],
        ],
        'parentDiscountTypeUrl' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'url родительского типа',
                'Not_Null',
            ],
        ],
        'Service__id' => [
            'Int',
            [
                'Comment' => 'id услуги',
                'Not_Null',
            ],
        ],
        'similarDiscountCacheJson' => [
            'Text',
            [
                'Comment' => 'Похожие акции в json',
                'Not_Null',
            ],
        ],
        'serviceName' => [
            'Varchar',
            [
                'Size'    => 100,
                'Comment' => 'Название услуги',
                'Not_Null',
            ],
        ],
        'serviceUrl' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'url услуги',
                'Not_Null',
            ],
        ],
        'parentServiceId' => [
            'Int',
            [
                'Comment' => 'id родительской услуги',
                'Not_Null',
            ],
        ],
        'parentServiceName' => [
            'Varchar',
            [
                'Size'    => 100,
                'Comment' => 'Имя родительской услуги',
                'Not_Null',
            ],
        ],
        'parentServiceUrl' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'url родительской услуги',
                'Not_Null',
            ],
        ],
        'imageCover300Url' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Превьюшка 300 на 300',
                'Not_Null',
            ],
        ],
        'imageCoverOriginalUrl' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Оригинальная картинка',
                'Not_Null',
            ],
        ],
        'Clinic__id' => [
            'Int',
            [
                'Comment' => 'id клиники',
                'Not_Null',
            ],
        ],
        'clinicName' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Название клиники',
                'Not_Null',
            ],
        ],
        'clinicShortName' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Краткое наименование клиники',
                'Not_Null',
            ],
        ],
        'clinicAddress' => [
            'Text',
            [
                'Comment' => 'Адрес клиники',
                'Not_Null',
            ],
        ],
        'clinicMetroJson' => [
            'Text',
            [
                'Comment' => 'Метро клиники',
                'Not_Null',
            ],
        ],
        'clinicSite' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Сайт клиники',
                'Not_Null',
            ],
        ],
        'clinicTelephone' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Телефон клиники',
                'Not_Null',
            ],
        ],
        'clinicPriceCategoryTitle' => [
            'Varchar',
            [
                'Size'    => 100,
                'Comment' => 'Ценовая категория клиники',
                'Not_Null',
            ],
        ],
        'isUnlimited' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Comment' => 'Является бессрочной?',
                'Not_Null',
            ],
        ],
        'showSimilarDiscount' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать похожие акции?',
                'Not_Null',
            ],
        ],
        'ImageInHome' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Comment' => 'путь к изображению, на главной странице',
            ],
        ],
    ],
    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],
        'ice_discount_cache_Discount__id_index' => [
            'Key',
            ['Discount__id'],
        ],
        'ice_discount_cache_City__id_inRightColumn_index' => [
            'Key',
            ['City__id'],
        ],
        'ice_discount_cache_Clinic__id_index' => [
            'Key',
            ['Clinic__id'],
        ],
    ],
];
