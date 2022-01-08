<?php

return array(
    'comment' => 'Подложка страницы клиники',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
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
        'Clinic_Page_Style__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id стилей подложки',    
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