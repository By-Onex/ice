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
                'Comment' => 'Название',    
                'Not_Null'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Фабрика',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Активно',    
                'Not_Null'
            )    
        ),
        'sort' => array(
            'Smallint',
            array(
                'Size' => 6,    
                'Default' => 0,    
                'Comment' => 'Сортировка',    
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
        'name' => array(
            'Key',
            array(
                'name'        
            )        
        )        
    )
);