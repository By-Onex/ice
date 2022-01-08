<?php

return array(
    'comment' => 'Тип рассылки',
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
        'title' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Заголовок',    
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