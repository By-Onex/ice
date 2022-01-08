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
        'createdAt' => array(
            'Datetime',
            array(
                'Comment' => 'Дата создания',    
                'Not_Null'
            )    
        ),
        'status' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Статус процесса',    
                'Not_Null'
            )    
        ),
        'json' => array(
            'Longtext',
            array(
                'Comment' => 'параметры в json',    
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
        'createdAt' => array(
            'Key',
            array(
                'createdAt'        
            )        
        )        
    )
);