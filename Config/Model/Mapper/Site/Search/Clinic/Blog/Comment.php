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
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id города',    
                'Not_Null'
            )    
        ),
        'author' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Автор коментарий',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Текст коментария',    
                'Not_Null'
            )    
        ),
        'rate' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Рейтинг коментария',    
                'Not_Null'
            )    
        ),
        'createdAt' => array(
            'Datetime',
            array(
                'Comment' => 'Дата добавления',    
                'Not_Null'
            )    
        ),
        'siteUrl' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Ссылка на коментарий',    
                'Not_Null'
            )    
        ),
        'clinicOldName' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Название клиники',    
                'Not_Null'
            )    
        ),
        'clinicAddres' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Адрес клиники',    
                'Not_Null'
            )    
        ),
        'clinicPhone' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Телефон клиники',    
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