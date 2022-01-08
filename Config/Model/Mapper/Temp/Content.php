<?php

return array(
    'author' => 'denis.d',
    'fields' => array(
        'id' => array(
            'Varchar',
            array(
                'Size' => 64,
                'Default' => null,
                'Comment' => 'id',
                'Null'
            )
        ),
        'spb_id' => array(
            'Varchar',
            array(
                'Size' => 64,
                'Default' => null,
                'Null'
            )
        ),
        'time' => array(
            'Datetime',
            array(
                'Default' => '2010-01-01 00:00:00',
                'Comment' => 'Время создания',
                'Null'
            )
        ),
        'utcode' => array(
            'Varchar',
            array(
                'Size' => 50,
                'Default' => null,
                'Comment' => 'Уникальный код',
                'Null'
            )
        ),
        'ip' => array(
            'Varchar',
            array(
                'Size' => 50,
                'Default' => null,
                'Comment' => 'ip',
                'Null'
            )
        ),
        'controller' => array(
            'Varchar',
            array(
                'Size' => 100,
                'Default' => null,
                'Comment' => 'Контроллер',
                'Null'
            )
        ),
        'table' => array(
            'Varchar',
            array(
                'Size' => 100,
                'Default' => null,
                'Comment' => 'Таблица',
                'Null'
            )
        ),
        'rowId' => array(
            'Int',
            array(
                'Size' => 11,
                'Default' => 0,
                'Comment' => 'Запись',
                'Null'
            )
        ),
        'day' => array(
            'Int',
            array(
                'Size' => 11,
                'Default' => 0,
                'Comment' => 'День от начала эры',
                'Null'
            )
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Default' => 0,
                'Comment' => 'Пользователь',
                'Null'
            )
        ),
        'json' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Not_Null'
            )
        )
    )
);
