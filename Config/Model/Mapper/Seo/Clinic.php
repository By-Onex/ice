<?php

return array(
    'comment' => 'Таблица для хранения и идентифицирования сео-урлов клиник',
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
        'url' => array(
            'Text',
            array(
                'Comment' => 'Сформированный урл',    
                'Not_Null'
            )    
        ),
        'clinicType' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Тип клиники'    
            )    
        ),
        'service' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id сервиса'    
            )    
        ),
        'districtId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id округа'    
            )    
        ),
        'metroId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id метро'    
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Айдишник города',    
                'Not_Null'
            )    
        ),
        'isActive' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Активность ссылки',    
                'Not_Null'
            )    
        ),
        'priceType' => array(
            'Int',
            array(
                'Size' => 11    
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