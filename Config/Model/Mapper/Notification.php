<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id',    
                'Not_Null'
            )    
        ),
        'clientToken' => array(
            'Varchar',
            array(
                'Size' => 1024,    
                'Comment' => 'Token устройства клиента',    
                'Not_Null'
            )    
        ),
        'type' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Тип уведомления',    
                'Not_Null'
            )    
        ),
        'dataJson' => array(
            'Text',
            array(
                'Comment' => 'Параметры для уведомлений в JSON',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Флаг активности подписки',    
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