<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id',    
                'Not_Null'
            )    
        ),
        'clinicType' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Тип клиники',    
                'Not_Null'
            )    
        ),
        'priceCategory' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Ценовая категория',    
                'Not_Null'
            )    
        ),
        'metroId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Метро',    
                'Not_Null'
            )    
        ),
        'okrugId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Округ',    
                'Not_Null'
            )    
        ),
        'districtId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Район',    
                'Not_Null'
            )    
        ),
        'service' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Услуга',    
                'Not_Null'
            )    
        ),
        'suburbId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Пригород',    
                'Not_Null'
            )    
        ),
        'insuranceId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Страхование',    
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