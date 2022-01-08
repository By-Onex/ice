<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Идентификатор',    
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
        'similarServiceId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id похожей услуги',    
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
        'Service__id' => array(
            'Key',
            array(
                'Service__id'        
            )        
        ),        
        'similarServiceId' => array(
            'Key',
            array(
                'similarServiceId'        
            )        
        )        
    )
);