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
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Город',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'Заголовок',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Text',
            array(
                'Comment' => 'Текст',    
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
        ),        
        'City__id' => array(
            'Key',
            array(
                'City__id'        
            )        
        )        
    )
);