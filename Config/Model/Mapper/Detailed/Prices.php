<?php

return array(
    'comment' => 'Подробные цены связанные с сервисами',
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
                'Size' => 255,    
                'Not_Null'
            )    
        ),
        'price' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'цена',    
                'Not_Null'
            )    
        ),
        'serviceId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Родительский сервис',    
                'Not_Null'
            )    
        ),
        'clinicId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Связанная клиника',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Активна',    
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