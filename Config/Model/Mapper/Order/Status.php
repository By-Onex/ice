<?php

return array(
    'comment' => 'Статус заявки на прием',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Первичный ключ',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Тайтл',    
                'Not_Null'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Имя',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Активен?',    
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