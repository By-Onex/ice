<?php

return array(
    'comment' => 'Мнения докторов о рекламе на 32top.ru',
    'fields' => array(
        'headerLink' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Ссылка в заголовке',    
                'Not_Null'
            )    
        ),
        'headerText' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Текст заголовка',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Показывать ли на сайте'    
            )    
        ),
        'text' => array(
            'Varchar',
            array(
                'Size' => 500,    
                'Comment' => 'Текст мнения'    
            )    
        ),
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
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