<?php

return array(
    'comment' => 'Цены на размещение по городам',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'Advertis_Placement__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id вида размещения'    
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id города'    
            )    
        ),
        'price1m' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Цена за 1 месяц'
            )    
        ),
        'price3m' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Цена за 3 месяца'
            )    
        ),
        'price6m' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Цена за 6 месяцев'
            )    
        ),
        'price12m' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Цена за 12 месяцев'
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
        'Advertis_Placement__id_City__id' => array(
            'Key',
            array(
                'Advertis_Placement__id'        
            )        
        ),        
        'price' => array(
            'Key',
            array(
                'price1m'        
            )        
        )        
    )
);