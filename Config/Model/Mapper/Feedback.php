<?php

return array(
    'comment' => 'Отзывы на сайте',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'text' => array(
            'Text',
            array(
                'Not_Null'
            )    
        ),
        'Feedback_Status__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'mail' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Not_Null'
            )    
        ),
        'phone' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Not_Null'
            )    
        ),
        'creationDatetime' => array(
            'Datetime',
            array(
                'Not_Null'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Not_Null'
            )    
        ),
        'referer' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Ссылка, с которой перешли',    
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