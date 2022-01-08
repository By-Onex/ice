<?php

return array(
    'fields' => array(
        'Distirct__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id района',    
                'Not_Null'
            )    
        ),
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id города',    
                'Not_Null'
            )    
        ),
        'Metro__id' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'id метро',    
                'Not_Null'
            )    
        ),
        'html' => array(
            'Text',
            array(
                'Comment' => 'html блока',    
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