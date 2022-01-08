<?php

return array(
    'admin' => [
        'rowPlugins' => array(
            'General' => array(
                'Site_Search_Clinic_Widget/adminHint' => array(
                    'title' => 'Подсказка:'
                )
            )
        ),
    ],
    'comment' => 'Цены для эконом-блока',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id',    
                'Not_Null'
            )    
        ),
        'Service__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Id услуги',    
                'Not_Null'
            )    
        ),
        'firstPrice' => array(
            'Varchar',
            array(
                'Size' => 63,    
                'Comment' => 'Первая цена',    
                'Not_Null'
            )    
        ),
        'secondPrice' => array(
            'Varchar',
            array(
                'Size' => 63,    
                'Comment' => 'Вторая цена',    
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