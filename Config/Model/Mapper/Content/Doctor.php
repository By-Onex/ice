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
        'Content__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Статья',    
                'Not_Null'
            )    
        ),
        'Doctor__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Доктор-автор',    
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
        'Content__id' => array(
            'Key',
            array(
                'Content__id'        
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