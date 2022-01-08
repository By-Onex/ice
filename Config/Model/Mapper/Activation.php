<?php

return array(
    'author' => 'denis.d',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'address' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Not_Null'
            )    
        ),
        'Mail_Message__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Сообщение',    
                'Not_Null'
            )    
        ),
        'type' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Not_Null'
            )    
        ),
        'code' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Not_Null'
            )    
        ),
        'callbackMessage' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Not_Null'
            )    
        ),
        'finished' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'day' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'createTime' => array(
            'Datetime',
            array(
                'Not_Null'
            )    
        ),
        'finishTime' => array(
            'Datetime',
            array(
                'Not_Null'
            )    
        ),
        'expirationTime' => array(
            'Datetime',
            array(
                'Not_Null'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'createIp' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Not_Null'
            )    
        ),
        'finishIp' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Not_Null'
            )    
        ),
        'paramsJson' => array(
            'Text',
            array(
                'Comment' => 'Параметры в json',    
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