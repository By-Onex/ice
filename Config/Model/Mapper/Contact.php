<?php

return array(
    'comment' => 'Контакты',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment',
                'Unsigned'
            )    
        ),
        'table' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Имя модели привязки',    
                'Not_Null'
            )    
        ),
        'rowId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'id модели',    
                'Not_Null'
            )    
        ),
        'fio' => array(
            'Varchar',
            array(
                'Size' => 500,    
                'Comment' => 'ФИО контактного лица',    
                'Not_Null'
            )    
        ),
        'phone' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Телефон',    
                'Not_Null'
            )    
        ),
        'status' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Статус',    
                'Not_Null'
            )    
        ),
        'note' => array(
            'Text',
            array(
                'Comment' => 'Примечание',    
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
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Not_Null'
            )    
        ),
        'email' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Default' => '',    
                'Comment' => 'E-mail',    
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
        'phone' => array(
            'Key',
            array(
                'phone'        
            )        
        )        
    )
);