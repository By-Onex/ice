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
                'Comment' => 'Дата создания'    
            )    
        ),
        'Banner__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id баннера',    
                'Not_Null'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id пользователя'    
            )    
        ),
        'userIp' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'ip пользователя'    
            )    
        ),
        'jsonData' => array(
            'Text',
            array(
                'Comment' => 'Дополнительные данные в json формате'    
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