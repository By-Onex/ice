<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id статьи',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Заголовок статьи',    
                'Not_Null'
            )    
        ),
        'siteTitle' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Title статьи',    
                'Not_Null'
            )    
        ),
        'keywords' => array(
            'Varchar',
            array(
                'Size' => 1024,    
                'Comment' => 'Ключевые слова',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Text',
            array(
                'Comment' => 'Текст статьи',    
                'Not_Null'
            )    
        ),
        'linkedArticleJson' => array(
            'Text',
            array(
                'Comment' => 'JSON похожих статей',    
                'Not_Null'
            )    
        ),
        'Clinic__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id клиники-владельца сниппета',    
                'Not_Null'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id города',    
                'Not_Null'
            )    
        ),
        'Content_Category__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id категории статьи',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 11,    
                'Comment' => 'Активна ли статья',    
                'Not_Null'
            )    
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'url статьи',    
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