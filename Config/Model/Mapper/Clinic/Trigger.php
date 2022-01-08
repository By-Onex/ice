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
        'appointmentDay' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Количество записей вчера',    
                'Not_Null'
            )    
        ),
        'appointmentWeek' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Количество записей на прошлой неделе',    
                'Not_Null'
            )    
        ),
        'appointmentAll' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Количество записей всего',    
                'Not_Null'
            )    
        ),
        'reviewWeek' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Количество отзывов на прошлой неделе',    
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