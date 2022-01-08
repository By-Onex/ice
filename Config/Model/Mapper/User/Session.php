<?php

return array(
	'signals' => null
,
    'author' => 'denis.d',
    'fields' => array(
        'id' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Not_Null'
            )    
        ),
        'phpSessionId' => array(
            'Varchar',
            array(
                'Size' => 64,    
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
        'lastActive' => array(
            'Datetime',
            array(
                'Not_Null'
            )    
        ),
        'remoteIp' => array(
            'Varchar',
            array(
                'Size' => 32,    
                'Not_Null'
            )    
        ),
        'userAgent' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Not_Null'
            )    
        ),
        'userRole' => array(
            'Varchar',
            array(
                'Size' => 512,    
                'Not_Null'
            )    
        ),
        'isCityRedirector' => array(
            'Tinyint',
            array(
                'Size' => 1,    
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
        'phpSessionId' => array(
            'Key',
            array(
                'phpSessionId'        
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