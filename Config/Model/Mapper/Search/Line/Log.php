<?php

return array(
    'comment' => 'Логи поиска одной строкой',
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
        'searchText' => array(
            'Longtext',
            array(
                'Comment' => 'Поисковой запрос',    
                'Not_Null'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'ID пользователя',    
                'Not_Null'
            )    
        ),
        'phpSessionId' => array(
            'Varchar',
            array(
                'Size' => 32,    
                'Default' => '',    
                'Comment' => 'ID сессии',    
                'Not_Null'
            )    
        ),
        'ip' => array(
            'Varchar',
            array(
                'Size' => 32,    
                'Default' => '',    
                'Comment' => 'IP клиента',    
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
                'Comment' => 'Источник перехода'    
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
        'isll_createdAt' => array(
            'Key',
            array(
                'ip'        
            )        
        ),        
        'isll_phpSessionId' => array(
            'Key',
            array(
                'phpSessionId'        
            )        
        ),        
        'isll_User__id_createdAt' => array(
            'Key',
            array(
                'User__id'        
            )        
        )        
    )
);