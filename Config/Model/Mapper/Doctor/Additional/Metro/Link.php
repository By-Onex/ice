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
        'Doctor__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Айдишник доктора',    
                'Not_Null'
            )    
        ),
        'Metro__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Айдишник метро',    
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
        'idaml_doctor' => array(
            'Key',
            array(
                'Doctor__id'        
            )        
        ),        
        'idaml_metro' => array(
            'Key',
            array(
                'Metro__id'        
            )        
        )        
    )
);