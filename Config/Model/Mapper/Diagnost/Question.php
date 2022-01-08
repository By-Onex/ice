<?php

return array(
    'comment' => 'Диагност.Вопросы',
    'author' => 'denis.d',
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
                'Size' => 128,    
                'Comment' => 'Название',    
                'Not_Null'
            )    
        ),
        'Diagnost_Answer__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Ответ, вроде как диагноз',    
                'Not_Null'
            )    
        ),
        'parentId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Родитель',    
                'Not_Null'
            )    
        ),
        'sort' => array(
            'Smallint',
            array(
                'Default' => 0,    
                'Comment' => 'Сортировка'    
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