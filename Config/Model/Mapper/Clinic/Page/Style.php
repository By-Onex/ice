<?php

return array(
    'comment' => 'Подложка страницы клиники',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'background' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'id фона страницы'    
            )    
        ),
        'banner' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'id баннерф'    
            )    
        ),
        'rightColumn' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Изображение справа'    
            )    
        ),
        'leftColumn' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Изображение слева'    
            )    
        ),
        'banner_link' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Ссылка с банера'    
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0    
            )    
        ),
        'bannerBackground' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Цвет фона баннера'    
            )    
        ),
        'bannerBorder' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Стили рамки баннера'    
            )    
        ),
        'height' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Высота фона страницы'    
            )    
        ),
        'gradient' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Активен ли градиент'    
            )    
        ),
        'gradientTop' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Стартовый цвет градиента фона страницы'    
            )    
        ),
        'gradientBottom' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Конечный цвет градиента страницы'    
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Название'    
            )    
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Приоритет подложки',    
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