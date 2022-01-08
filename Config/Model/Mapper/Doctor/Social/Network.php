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
        'Doctor__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Доктор',    
                'Not_Null'
            )    
        ),
        'Social_Network__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Социальная сеть',    
                'Not_Null'
            )    
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Ссылка на соц.сеть',    
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
        'Doctor__id' => array(
            'Key',
            array(
                'Doctor__id'        
            )        
        )        
    )
);