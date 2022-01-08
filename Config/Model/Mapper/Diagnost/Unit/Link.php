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
        'Diagnost_Unit__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Элемент диагноста',    
                'Not_Null'
            )    
        ),
        'Service__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Услуга',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'Название',    
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