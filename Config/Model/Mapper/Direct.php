<?php

return array(
    'comment' => 'Статистика 32топ.Директ',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id',    
                'Not_Null'
            )    
        ),
        'source' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Сайт с рекламой',    
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
        'year' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Год',    
                'Not_Null'
            )    
        ),
        'month' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Месяц',    
                'Not_Null'
            )    
        ),
        'requestCount' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Количество запросов по рекламе',    
                'Not_Null'
            )    
        ),
        'showCount' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Количество показов рекламы',    
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