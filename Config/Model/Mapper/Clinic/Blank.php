<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id бланка',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'Clinic__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id Клиники',    
                'Not_Null'
            )    
        ),
        'Component_Comment__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id Коммента',    
                'Not_Null'
            )    
        ),
        'isModerated' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'прошла модерацию?',    
                'Not_Null'
            )    
        ),
        'createdAt' => array(
            'Datetime',
            array(
                'Comment' => 'дата и время создания',    
                'Not_Null'
            )    
        ),
        'imageUrl' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'url картинки бланка',    
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
        )
    ),    
    'indexes' => array(
        'id' => array(
            'Primary',
            array(
                'id'        
            )        
        ),        
        'Clinic__id' => array(
            'Key',
            array(
                'Clinic__id'        
            )        
        ),        
        'isModerated' => array(
            'Key',
            array(
                'isModerated'        
            )        
        )        
    )
);