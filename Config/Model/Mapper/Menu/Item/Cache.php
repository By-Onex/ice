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
        'title' => array(
            'Varchar',
            array(
                'Size' => 96,    
                'Comment' => 'Название пункта меню',    
                'Not_Null'
            )    
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 96,    
                'Comment' => 'Ссылка',    
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