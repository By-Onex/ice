<?php

return array(
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
        'Clinic__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id клиники',    
                'Not_Null'
            )    
        ),
        'oldName' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'старое название',    
                'Not_Null'
            )    
        ),
        'newName' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'новое название',    
                'Not_Null'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id пользователя',    
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