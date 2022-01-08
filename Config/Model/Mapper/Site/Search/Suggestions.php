<?php

return array(
    'comment' => 'Поисковые подсказки',
    'fields' => array(
        'frequency' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Частота запроса',    
                'Not_Null'
            )    
        ),
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
                'Comment' => 'Рекомендуемый запрос'    
            )    
        ),
        'isRotate' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Ротруется ли'    
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