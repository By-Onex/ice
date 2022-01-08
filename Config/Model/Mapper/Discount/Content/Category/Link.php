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
        'Discount__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'Content_Category__id' => array(
            'Int',
            array(
                'Size' => 11,    
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