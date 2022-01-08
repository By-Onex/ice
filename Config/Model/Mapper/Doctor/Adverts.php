<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'ID',    
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
        'pageNumber' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'номсер страницы',    
                'Not_Null'
            )    
        ),
        'Doctor_Adverts_Position__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'ID позиции',    
                'Not_Null'
            )    
        ),
        'Doctor__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'ID города',    
                'Not_Null'
            )    
        ),
        'showPercent' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'процент показа',    
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