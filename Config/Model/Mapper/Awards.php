<?php

return array(
    'comment' => 'Справочник медикаментов',
    'admin' => [
        'fields' => [
            'id',
            'name',
            'text',
            'rowId'
        ]
    ],
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'заголовок',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Текст',    
                'Not_Null'
            )    
        ),
        'table' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Таблица',    
                'Not_Null'
            )    
        ),
        'rowId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id доктора/клиники',    
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