<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id турбо-статьи',    
                'Not_Null'
            )    
        ),
        'Content__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id нетурбо-статьи',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Заголовок турбо-статьи',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Longtext',
            array(
                'Comment' => 'Текст турбо-статьи',    
                'Not_Null'
            )    
        ),
        'relatedLinks' => array(
            'Text',
            array(
                'Comment' => 'Ссылки на похожие статьи',    
                'Not_Null'
            )    
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Урл турбо-стати',    
                'Not_Null'
            )    
        ),
        'Content_Category__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Категория турбо-статьи',    
                'Not_Null'
            )    
        ),
        'createdAt' => array(
            'Datetime',
            array(
                'Comment' => 'Дата создания турбо-статьи',    
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