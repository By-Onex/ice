<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'clinicId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id клиники',    
                'Not_Null'
            )    
        ),
        'articleId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id статьи',    
                'Not_Null'
            )    
        ),
        'priority' => array(
            'Int',
            array(
                'Size' => 3,    
                'Comment' => 'Приоритет показа на ценах в статьях'    
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