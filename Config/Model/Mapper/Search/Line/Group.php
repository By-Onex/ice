<?php

return array(
    'comment' => 'Группы для поиска одной строкой',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'ID',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'title' => array(
            'Text',
            array(
                'Comment' => 'h1 на странице',    
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