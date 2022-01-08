<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Название миграции',    
                'Not_Null'
            )    
        ),
        'status' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'Статус выполнения',    
                'Not_Null'
            )    
        ),
        'updatedAt' => array(
            'Datetime',
            array(
                'Comment' => 'Дата обновления'    
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