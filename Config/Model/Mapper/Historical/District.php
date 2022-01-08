<?php

return array(
    'comment' => 'Исторический районы',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Имя района',    
                'Not_Null'
            )    
        ),
        'shortname' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Короткое имя района',    
                'Not_Null'
            )    
        ),
        'translit' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Имя района транслитом',    
                'Not_Null'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Город',    
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