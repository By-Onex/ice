<?php

return array(
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
        'Subscribe_Type__id' => array(
            'Int',
            array(
                'Size' => 11    
            )    
        ),
        'identificator' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Email или телефон'    
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
        'Subscribe_Type__id' => array(
            'Key',
            array(
                'Subscribe_Type__id'        
            )        
        )        
    )
);