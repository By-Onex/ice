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
        'title' => array(
            'Varchar',
            array(
                'Size' => 64,
                'Not_Null'
            )
        ),
        'count' => array(
            'Int',
            array(
                'Size' => 11,
                'Not_Null'
            )
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,
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