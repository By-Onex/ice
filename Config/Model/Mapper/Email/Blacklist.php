<?php

return array(
    'comment' => 'Блэклист емайлов',
    'fields' => array(
        'createdAt' => array(
            'Datetime',
            array(
                'Comment' => 'Дата создания',    
                'Not_Null'
            )    
        ),
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'email' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'email',    
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
        'email_unique' => array(
            'Unique',
            array(
                'email'
            )
        ),
        'email' => array(
            'Key',
            array(
                'email'        
            )        
        )        
    )
);