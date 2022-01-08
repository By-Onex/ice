<?php

return array(
    'fields' => array(
        'discountViewTitle' => array(
            'Varchar',
            array(
                'Size' => 50,
                'Comment' => 'Тайтл на отображении акции'
            )
        ),
        'id' => array(
            'Int',
            array(
                'Size' => 11,
                'Not_Null',
                'Auto_Increment'
            )
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 50,
                'Comment' => 'Название',
                'Not_Null'
            )
        ),
        'parentId' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'id родительской категории',
                'Not_Null'
            )
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 50,
                'Comment' => 'URL',
                'Not_Null'
            )
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 4,
                'Comment' => 'Активность',
                'Not_Null'
            )
        ),
        'isGroup' => array(
            'Tinyint',
            array(
                'Size' => 4,
                'Comment' => 'Группа?',
                'Not_Null'
            )
        ),
        'iconUrl' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Comment' => 'URL иконки',
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