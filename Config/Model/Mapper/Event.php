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