<?php

return array(
    'comment' => 'Портфолио докторов',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'Doctor__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id доктора',    
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
        ),
        'beforePhoto' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id фото ДО',    
                'Not_Null'
            )    
        ),
        'afterPhoto' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id фото ПОСЛЕ',    
                'Not_Null'
            )    
        ),
        'beforeText' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Текст для фото ДО'    
            )    
        ),
        'afterText' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Текст для фото ПОСЛЕ'    
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