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
                'Size' => 64,    
                'Comment' => 'Описание',    
                'Not_Null'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Способ',    
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
        'field' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Соответствующее поле в базе',    
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