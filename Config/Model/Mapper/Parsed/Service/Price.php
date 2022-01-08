<?php

return array(
    'fields' => array(
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Активность',    
                'Not_Null'
            )    
        ),
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Идентификатор',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Имя клиники',    
                'Not_Null'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Идентификатор города',    
                'Not_Null'
            )    
        ),
        'phone' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Телефоны'    
            )    
        ),
        'address' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Адрес клиники'    
            )    
        ),
        'longitude' => array(
            'Decimal',
            array(
                        'Size'	=> array('16', '13')
        ,    
                'Comment' => 'Долгота',    
                'Not_Null'
            )    
        ),
        'latitude' => array(
            'Decimal',
            array(
                        'Size'	=> array('16', '13')
        ,    
                'Comment' => 'Широта',    
                'Not_Null'
            )    
        ),
        'site' => array(
            'Varchar',
            array(
                'Size' => 127,    
                'Comment' => 'Сайт клиники'    
            )    
        ),
        'email' => array(
            'Varchar',
            array(
                'Size' => 127,    
                'Comment' => 'Email клиники'    
            )    
        ),
        'servicesJSON' => array(
            'Varchar',
            array(
                'Size' => 2048,    
                'Comment' => 'Услуги с ценами в JSON'    
            )    
        ),
        'similarClinicJSON' => array(
            'Varchar',
            array(
                'Size' => 1024,    
                'Comment' => 'Похожие клиники'    
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
        'ice_parsed_service_price_City__id_fk' => array(
            'Key',
            array(
                'City__id'        
            )        
        )        
    )
);