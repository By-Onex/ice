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
        'Content__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Статья',    
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
        'page_visits' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Количество просмотров',    
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