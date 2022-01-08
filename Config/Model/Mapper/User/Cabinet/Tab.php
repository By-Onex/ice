<?php

return array(
    'fields' => array(
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
                'Size' => 255,    
                'Comment' => 'Заголовок',    
                'Not_Null'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Название',    
                'Not_Null'
            )    
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Ссылка',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Активен?',    
                'Not_Null'
            )    
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Сортировка',    
                'Not_Null'
            )    
        ),
        'User_Cabinet_Tab_Type__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id типа',    
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