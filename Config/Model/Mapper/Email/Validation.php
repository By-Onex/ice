<?php

return array(
    'fields' => array(
        'email' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Email для подтверждения',    
                'Not_Null'
            )    
        ),
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'table' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Таблица',    
                'Not_Null'
            )    
        ),
        'rowId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id записи в таблице',    
                'Not_Null'
            )    
        ),
        'code' => array(
            'Varchar',
            array(
                'Size' => 512,    
                'Comment' => 'Код подтверждения',    
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
        'ip' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'IP пользователя, добавившего запись',    
                'Not_Null'
            )    
        ),
        'validated' => array(
            'Tinyint',
            array(
                'Size' => 4,    
                'Comment' => 'Подтвержден ли Email'    
            )    
        ),
        'validateTime' => array(
            'Datetime',
            array(
                'Comment' => 'Дата подтверждения'    
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