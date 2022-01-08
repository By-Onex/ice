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
        'url' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Url статического файла',    
                'Not_Null'
            )    
        ),
        'Static_File_Content_Type__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Тип контента статического файла',    
                'Not_Null'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Город',    
                'Not_Null'
            )    
        ),
        'description' => array(
            'Varchar',
            array(
                'Size' => 32,    
                'Comment' => 'Описание',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Text',
            array(
                'Comment' => 'Контент',    
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