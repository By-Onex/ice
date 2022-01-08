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
        'Mail_Once_Session__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Сессия рассылки',    
                'Not_Null'
            )    
        ),
        'createdAt' => array(
            'Datetime',
            array(
                'Comment' => 'Дата создания',    
                'Not_Null'
            )    
        ),
        'json' => array(
            'Longtext',
            array(
                'Comment' => 'параметры в json',    
                'Not_Null'
            )    
        ),
        'status' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'статус процесса',    
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
        'Mail_Once_Session__id' => array(
            'Key',
            array(
                'Mail_Once_Session__id'        
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