<?php

return [
    'comment' => 'Сопоставление доктора с доктором из внешнего ресурса',
    'author' => 'Soynov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Идентификатор записи',
                'Not_Null',
                'Auto_Increment',
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
        'Doctor__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор доктора',
                'Not_Null',
            ],
        ],
        'Doctor_Parsed__id' => [
            'Int',
            [
                'Comment' => 'Идентификатор данных доктора внешнего ресурса',
                'Not_Null',
            ],
        ],
        'Doctor_Parsed_Match_Stage__id' => [
            'Int',
            [
                'Default' => 1,
                'Comment' => 'Идентификатор стадии сопоставления',
                'Not_Null',
            ],
        ],
    ],
    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],
        'ice_doctor_parsed_match_Doctor_uniq' => [
            'Unique',
            ['Doctor__id'],
        ],
    ],
];