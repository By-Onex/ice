<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id',    
                'Not_Null'
            )    
        ),
        'Clinic__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id клиники',    
                'Not_Null'
            )    
        ),
        'time' => array(
            'Timestamp',
            array(
                'Comment' => 'Время',    
                'Not_Null'
            )    
        ),
        'Clinic_Statistic_Goal__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'html блока',    
                'Not_Null'
            )    
        ),
        'referrer' => array(
            'Varchar',
            array(
                'Size' => 512,    
                'Comment' => 'Реферрер страницы',    
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