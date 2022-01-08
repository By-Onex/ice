<?php

return array(
    'comment' => 'Процент посетителей',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'count' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Количество'    
            )    
        ),
        'description' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Описание (если отличается от стандартного)'    
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id города'    
            )    
        )
    ),    
    'indexes' => array(
        'id' => array(
            'Primary',
            array(
                'id'        
            )        
        ),        
        'City__id' => array(
            'Key',
            array(
                'City__id'        
            )        
        )        
    )
);