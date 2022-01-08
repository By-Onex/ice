<?php

return [
    'author' => 'haosit',

    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],

        'rowId' => [
            'Int',
            [
                'Comment' => 'Идентификатор клиники или Доктора в зависимости от relType',
                'Not_Null',
            ],
        ],

        'Service__id' => [
            'Int',
            [
                'Default' => 0,
            ],
        ],

        'table' => [
            'Varchar',
            [
                'Size'    => 50,
                'Default' => '',
                'Comment' => 'Тип Клиника(Clinic) или Доктор(Doctor) или Статья(Content)',
                'Not_Null',
            ],
        ],

        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Активна',
                'Not_Null',
            ],
        ],

        'sort' => [
            'Int',
            [
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'price' => [
            'Double',
            [
                'Comment' => 'цена услуги| для клиник или докторов',
                'Not_Null',
            ],
        ],

        'priceMin' => [
            'Int',
            [
                'Comment' => 'Минимальная цена',
                'Not_Null',
            ],
        ],

        'priceMax' => [
            'Int',
            [
                'Comment' => 'Максимальная цена',
                'Not_Null',
            ],
        ],

        'position' => [
            'Int',
            [
                'Default' => 0,
                'Not_Null',
            ],
        ],

        'checkDate' => [
            'Date',
            [
                'Comment' => 'Дата проверки',
                'Not_Null',
            ],
        ],

        'unit' => [
            'Text',
            [
                'Comment' => 'Единица измерения',
                'Not_Null',
            ],
        ],

        'City__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'ID города',
                'Not_Null',
            ],
        ],

        'note' => [
            'Text',
            [
                'Comment' => 'Примечание',
                'Not_Null',
            ],
        ],

        'Service_Unit__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор юнита услуги',
                'Not_Null',
            ],
        ],

        'serviceFeatureIdsJSON' => [
            'Varchar',
            [
                'Size'    => 512,
                'Comment' => 'Массив идентификаторов деталей услуги в JSON',
                'Not_Null',
            ],
        ],

    ],

    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],

        'serviceId' => [
            'Key',
            ['Service__id'],
        ],

        'ice_component_service_rowId_table_index' => [
            'Key',
            ['rowId'],
        ],

        'ice_ident_link_rowId_table_index' => [
            'Key',
            ['rowId'],
        ],

    ],
];