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
        'text' => array(
            'Mediumtext',
            array(
                'Comment' => 'Текст поиска',    
                'Not_Null'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Пользователь',    
                'Not_Null'
            )    
        ),
        'phpSessionId' => array(
            'Varchar',
            array(
                'Size' => 32,    
                'Comment' => 'сессия пользователя',    
                'Not_Null'
            )    
        ),
        'ip' => array(
            'Varchar',
            array(
                'Size' => 32,    
                'Comment' => 'ip',    
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
        'referrerUrl' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Url с которого был сделан запрос'    
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
        'User__id' => array(
            'Key',
            array(
                'User__id'        
            )        
        ),        
        'phpSessionId' => array(
            'Key',
            array(
                'phpSessionId'        
            )        
        ),        
        'ip' => array(
            'Key',
            array(
                'ip'        
            )        
        )        
    )
);