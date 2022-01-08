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
        'name' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Not_Null'
            )    
        ),
        'type' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'Тип рассылки',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Not_Null'
            )    
        ),
        'isTest' => array(
            'Tinyint',
            array(
                'Size' => 1,    
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