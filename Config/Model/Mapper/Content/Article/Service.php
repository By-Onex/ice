<?php

return array(
    'author' => 'markov',
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
        'Service__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Сервис',    
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
        )        
    )
);