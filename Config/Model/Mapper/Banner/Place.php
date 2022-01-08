<?php

return array(
    'admin' => array(
        'fields' => array(
            'id', 'name', 'bp_translit', 'banners_count', 'size'
        ),
        'links' => array(
            'id', 'name'
        ),
        'filters' => array(
            'City__id' => 'City::id || 0'
        ),
        'limit' => 30
    ),
    'comment' => 'Расположение баннеров',
    'author' => 'denis.d',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Первичный ключ',
                'Null',
                'Auto_Increment'
            )
        ),
        'spb_id' => array(
            'Int',
            array(
                'Size' => 11,
                'Null'
            )
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 64,
                'Default' => null,
                'Comment' => 'Название',
                'Null'
            )
        ),
        'bp_translit' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Default' => null,
                'Comment' => 'Транслит названия',
                'Null'
            )
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Default' => 0,
                'Comment' => 'Город',
                'Null'
            )
        ),
        'size' => array(
            'Int',
            array(
                'Default' => 0,
                'Comment' => 'Размер рекламного блока(количество баннеров в данном блоке)'
            )
        )
    )
);
