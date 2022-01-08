<?php

return array(
    'fields' => array(
        'avgPrice' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Средняя цена',    
                'Not_Null'
            )    
        ),
        'maxPrice' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Максимальная цена',    
                'Not_Null'
            )    
        ),
        'minPrice' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Минимальная цена',    
                'Not_Null'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Идентификатор',    
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
        'table' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Таблица',    
                'Not_Null'
            )    
        ),
        'rowId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Запись',    
                'Not_Null'
            )    
        ),
        'Service__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Идентификатор услуги',    
                'Not_Null'
            )    
        )
    ),    
    'indexes' => array(
        'ice_site_search_clinic_block_price_cache_City__id_index' => array(
            'Key',
            array(
                'City__id'        
            )        
        ),        
        'id' => array(
            'Primary',
            array(
                'id'        
            )        
        ),        
        'ice_site_search_clinic_block_price_cache_Service__id_index' => array(
            'Key',
            array(
                'Service__id'        
            )        
        )        
    )
);