<?php

return array(
    'comment' => 'Тип размещения',
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
                'Size' => 255,    
                'Comment' => 'Заголовок типа размещения'    
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Имя'    
            )    
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Порядок вывода (чем больше, тем выше)'    
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
        'sort' => array(
            'Key',
            array(
                'sort'        
            )        
        )        
    )
);