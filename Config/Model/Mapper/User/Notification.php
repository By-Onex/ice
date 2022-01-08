<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'text' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Описание',    
                'Not_Null'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Описание',    
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
        ),
        'Subscribe_Type__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Связанный тип разовой рассылки',    
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