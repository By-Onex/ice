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
        'Awards__id' => array(
            'Int',
            array(
                'Size' => 11    
            )    
        ),
        'tableName' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Not_Null'
            )    
        ),
        'rowId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'isModerated' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Промодерировано',
                'Not_Null'
            ]
        ],
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