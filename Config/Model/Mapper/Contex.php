<?php

return array(
    'author' => 'denis.d',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Первичный ключ',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'Clinic__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0    
            )    
        ),
        'year' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Год',    
                'Not_Null'
            )    
        ),
        'month' => array(
            'Smallint',
            array(
                'Size' => 6,    
                'Default' => 0,    
                'Comment' => 'Месяц',    
                'Not_Null'
            )    
        ),
        'page_visits' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Посещений страницы',    
                'Not_Null'
            )    
        ),
        'site_visits' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Переходов на сайт',    
                'Not_Null'
            )    
        ),
        'price_visits' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Переходов на страницу с ценами',    
                'Not_Null'
            )    
        ),
        'phone_views' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Количество просмотров телефонов клиники'    
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
        'NewIndex1' => array(
            'Key',
            array(
                'Clinic__id'        
            )        
        )        
    )
);