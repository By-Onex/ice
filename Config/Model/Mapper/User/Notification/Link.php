<?php

return array(
    'comment' => 'уведомления пользователей',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'айди',    
                'Not_Null'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Айди пользователя',    
                'Not_Null'
            )    
        ),
        'User_notification__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Оповещение',    
                'Not_Null'
            )    
        ),
        'User_notification_type__id' => array(
            'Tinyint',
            array(
                'Size' => 2,    
                'Comment' => 'Способ оповещения',    
                'Not_Null'
            )    
        )
    ),    
    'indexes' => array(
        'id' => array(
            'Primary',
            array(
                'id',         
            'id'        
            )        
        ),        
        'User__id' => array(
            'Key',
            array(
                'User__id'        
            )        
        )        
    )
);