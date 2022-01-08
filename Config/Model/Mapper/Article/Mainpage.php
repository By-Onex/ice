<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id',    
                'Not_Null',
                'Auto_Increment'
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
        'Content__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Статья',    
                'Not_Null'
            )    
        ),
        'Clinic__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Клиника'    
            )    
        ),
        'Component_Image__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Обложка статьи',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Заголовок'    
            )    
        ),
        'preview' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Превью'    
            )    
        ),
        'priority' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Приоритет',    
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