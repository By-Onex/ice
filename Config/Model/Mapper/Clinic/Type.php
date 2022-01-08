<?php

return array(
    'comment' => 'Типы клиник',
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
        'title' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Заголовок',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Активно',    
                'Not_Null'
            )    
        ),
        'sort' => array(
            'Smallint',
            array(
                'Size' => 6,    
                'Default' => 0,    
                'Comment' => 'Сортировка',    
                'Not_Null'
            )    
        ),
        'plural' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Множественная форма',    
                'Not_Null'
            )    
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Урл',    
                'Not_Null'
            )    
        ),
        'translit' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Урл',    
                'Not_Null'
            )    
        ),
        'masculine' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Мужской род',    
                'Not_Null'
            )    
        ),
        'feminine' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Женский род',    
                'Not_Null'
            )    
        ),
        'neuter' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Средний род',    
                'Not_Null'
            )    
        ),
        'predlPadezh' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'Предложный падеж',    
                'Not_Null'
            )    
        ),
        'searchClinicHint' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Comment' => 'поле на фотке клиники, с указанием типа',    
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