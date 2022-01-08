<?php

return array(
    'comment' => 'Связь пригородов и клиник',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'Suburb__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id пригорода',    
                'Not_Null'
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
        'position' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Поднятие по пригороду',    
                'Not_Null'
            )    
        ),
        'updatedAt' => array(
            'Datetime',
            array(
                'Comment' => 'Дата обновления'    
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