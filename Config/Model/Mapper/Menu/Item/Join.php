<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'Menu__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Меню',    
                'Not_Null'
            )    
        ),
        'Menu_Item__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Пункт меню',    
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
        'Menu__id' => array(
            'Key',
            array(
                'Menu__id'        
            )        
        )        
    )
);