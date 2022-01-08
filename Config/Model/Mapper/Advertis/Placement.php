<?php

return array(
	'admin' => array(
		'fields'  => array (
			'id', 
            'title', 
            'sort',
			'active',
            'Advertis_Placement_Type__id',
            'price1m', 
            'price3m', 
            'price6m',
			'price12m',
            'isDefault'
		)
	),
    'comment' => 'Вид размещения',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )
        ),
        'Advertis_Placement_Type__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id типа размещения',    
                'Not_Null'
            )    
        ),
        'placementTitle' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Размещение',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Text',
            array(
                'Comment' => 'Описание',    
                'Not_Null'
            )    
        ),
        'price1m' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Not_Null'
            )    
        ),
        'price3m' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Not_Null'
            )    
        ),
        'price6m' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Not_Null'
            )    
        ),
        'price12m' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Not_Null'
            )    
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Порядок сортировки (чем больше, тем выше)',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Активен?',    
                'Not_Null'
            )    
        ),
        'isDefault' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Показывать по умолчанию',    
                'Not_Null'
            )    
        ),
        'block_number' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Номер блока',    
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
        ),        
        'Advertis_Placement_Type__id' => array(
            'Key',
            array(
                'Advertis_Placement_Type__id'        
            )        
        )        
    )
);