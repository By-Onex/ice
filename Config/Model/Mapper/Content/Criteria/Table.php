<?php

return array(
    'author' => 'a.ljubimov',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'Content_Category__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'name' => array(
            'Text',
            array(
                'Comment' => 'Название таблицы',    
                'Not_Null'
            )    
        ),
        'hiddenFieldsJson' => array(
            'Longtext',
            array(
                'Comment' => 'Поля, которые должны скрываться',    
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