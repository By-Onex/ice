<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id',    
                'Not_Null'
            )    
        ),
        'clinicName' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Название клиники',    
                'Not_Null'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id города',    
                'Not_Null'
            )    
        ),
        'clinicUrl' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Урл клиники',    
                'Not_Null'
            )    
        ),
        'reviewDate' => array(
            'Datetime',
            array(
                'Comment' => 'Дата отзыва',    
                'Not_Null'
            )    
        ),
        'reviewAuthor' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Автор отзыва',    
                'Not_Null'
            )    
        ),
        'reviewText' => array(
            'Text',
            array(
                'Comment' => 'Текст отзыва',    
                'Not_Null'
            )    
        ),
        'hasAnswer' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Есть ли ответ клиники',    
                'Not_Null'
            )    
        ),
        'isModerated' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Промодерирован ли',    
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