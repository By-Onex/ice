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
        'name' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Имя события',    
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
        'Discount__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id акции',    
                'Not_Null'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id города',    
                'Not_Null'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id пользователя',    
                'Not_Null'
            )    
        ),
        'userIp' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'ip пользователя',    
                'Not_Null'
            )    
        ),
        'jsonData' => array(
            'Text',
            array(
                'Comment' => 'Дополнительная информация в json',    
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
        'name' => array(
            'Key',
            array(
                'name'        
            )        
        ),        
        'createdAt' => array(
            'Primary',
            array(
                'createdAt'        
            )        
        )        
    )
);