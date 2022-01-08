<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'regexp' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Not_Null'
            )    
        ),
        'description' => array(
            'Varchar',
            array(
                'Size' => 512,    
                'Not_Null'
            )    
        ),
        'example' => array(
            'Varchar',
            array(
                'Size' => 512,    
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