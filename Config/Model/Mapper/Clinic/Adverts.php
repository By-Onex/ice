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
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id города',    
                'Not_Null'
            )    
        ),
        'pageNumber' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Номер страницы в рейтинге',    
                'Not_Null'
            )    
        ),
        'Clinic_Adverts_Position__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id позиции (сверху/снизу)',    
                'Not_Null'
            )    
        ),
        'Clinic__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id стоматологии',    
                'Not_Null'
            )    
        ),
        'showPercent' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Процент показа',    
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