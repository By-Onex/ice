<?php

return array(
    'comment' => 'Просмотры страницы клиники',
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
        'Contex__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'id статистики'    
            )    
        ),
        'Clinic__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'id клиники'    
            )    
        ),
        'year' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Год',    
                'Not_Null'
            )    
        ),
        'month' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Месяц',    
                'Not_Null'
            )    
        ),
        'realVisits' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Реальное количество просмотров страницы клиники в этом месяце',    
                'Not_Null'
            )    
        ),
        'accrualVisits' => array(
            'Double',
            array(
                'Default' => 0,    
                'Comment' => 'Сколько визитов должно быть начислено',    
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
        ),        
        'icc_cliyearmonth' => array(
            'Key',
            array(
                'Clinic__id'        
            )        
        )        
    )
);