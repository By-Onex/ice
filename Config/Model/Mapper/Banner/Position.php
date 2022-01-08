<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 12,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Внутреннее имя',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Активно',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Название',    
                'Not_Null'
            )    
        ),
        'oldName' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Старое название',    
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