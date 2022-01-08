<?php

return array(
    'fields' => array(
        'parentId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Родительская услуга',    
                'Not_Null'
            )    
        ),
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id города',    
                'Not_Null'
            )    
        ),
        'Service__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id услуги',    
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