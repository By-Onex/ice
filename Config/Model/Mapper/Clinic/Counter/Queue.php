<?php

return array(
    'comment' => 'Очередь для начисления просмотров клиник',
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
        'timestamp' => array(
            'Timestamp',
            array(
                'Default' => 'CURRENT_TIMESTAMP',    
                'Comment' => 'Время, когда нужно начислить',    
                'Not_Null'
            )    
        ),
        'Contex__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id записи в ice_contex',    
                'Not_Null'
            )    
        ),
        'count' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Количество, которое необходимо начислить',    
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
        'iccq_timestamp' => array(
            'Key',
            array(
                'timestamp'        
            )        
        )        
    )
);