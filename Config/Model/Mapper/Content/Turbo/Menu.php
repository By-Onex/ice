<?php

return array(
    'comment' => 'Меню турбо-статей',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'text' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Comment' => 'Текст ссылки',    
                'Not_Null'
            )    
        ),
        'link' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Ссылка',    
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