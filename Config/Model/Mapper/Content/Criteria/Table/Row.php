<?php

return array(
    'author' => 'a.ljubimov',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,
                'Not_Null',
                'Auto_Increment'
            )
        ),
        'Content__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Not_Null'
            )
        ),
        'Content_Criteria_Table__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Not_Null'
            )
        ),
        'shortName' => array(
            'Text',
            array(
                'Comment' => 'Краткое название статьи',    
                'Not_Null'
            )    
        ),
        'efficiency' => array(
            'Int',
            array(
                'Size' => 1,
                'Default' => 3,
                'Comment' => 'Эффективность (1,3 или 5)',
                'Not_Null'
            )
        ),
        'time' => array(
            'Text',
            array(
                'Comment' => 'Время, которое занимает работа',
                'Not_Null'
            )
        ),
        'esthete' => array(
            'Int',
            array(
                'Size' => 1,
                'Default' => 3,
                'Comment' => 'Эстетичность (от 1 до 5)',
                'Not_Null'
            )
        ),
        'price' => array(
            'Text',
            array(
                'Comment' => 'Цена',
                'Not_Null'
            )
        ),
        'restTime' => array(
            'Text',
            array(
                'Comment' => 'Время восстановления',
                'Not_Null'
            )
        ),
        'updatedAt' => array(
            'Datetime',
            array(
                'Comment' => 'Дата последнего обновления'
            )
        ),
        'active' => array(
            'Int',
            array(
                'Size' => 1,
                'Default' => 1,
                'Not_Null'
            )
        )
    ),
    'indexes' => array(
        'id' => array(
            'Primary',
            array(
                'id'
            )
        )
    )
);