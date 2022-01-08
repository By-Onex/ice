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
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'table' => array(
            'Varchar',
            array(
                'Size' => 64,    
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
        'field' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Not_Null'
            )    
        ),
        'value' => array(
            'Text',
            array(
                'Not_Null'
            )    
        ),
        'createdAt' => array(
            'Datetime',
            array(
                'Not_Null'
            )    
        ),
        'action' => array(
            'Varchar',
            array(
                'Size' => 64,    
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
        'User__id' => array(
            'Key',
            array(
                'User__id'        
            )        
        )        
    )
);