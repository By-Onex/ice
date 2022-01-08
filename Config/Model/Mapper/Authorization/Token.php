<?php

return array(
    'comment' => 'Лог авторизации',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'code' => array(
            'Varchar',
            array(
                'Size' => 250,    
                'Not_Null'
            )    
        ),
        'isActivated' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
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
        'code' => array(
            'Key',
            array(
                'code'        
            )        
        )        
    )
);