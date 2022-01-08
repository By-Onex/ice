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
        'table' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Название',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Название',    
                'Not_Null'
            )    
        ),
        'rTitle' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Название'    
            )    
        ),
        'vTitle' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Название'    
            )    
        ),
        'pTitle' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Название'    
            )    
        ),
        'dTitle' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Название'    
            )    
        ),
        'tTitle' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Название'    
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