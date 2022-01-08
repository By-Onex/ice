<?php

return array(
    'comment' => 'Специализации докторов',
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
                'Size' => 256,    
                'Comment' => 'Специализация',    
                'Not_Null'
            )    
        ),
        'translit' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Транслит для ссылки',    
                'Not_Null'
            )    
        ),
        'rodPadezh' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Специализация в род. падеже',    
                'Not_Null'
            )    
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Порядок сортировки',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'Активна',    
                'Not_Null'
            )    
        ),
        'titlePlural' => array(
            'Varchar',
            array(
                'Size' => 256    
            )    
        ),
        'rodPadezhPlural' => array(
            'Varchar',
            array(
                'Size' => 256    
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
        'idc_translit' => array(
            'Key',
            array(
                'translit'        
            )        
        )        
    )
);