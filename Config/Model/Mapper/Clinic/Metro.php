<?php

return array (
    
        		'signals' => array(
        'onCreate' => array(
        	'modelModerate'
    	)
    ),
	
    
	                    'fields'            => array(
        'id' => array(
        	'Int',
        	array(
        		'Not_Null',
        		'Auto_Increment'
    		)
    	),
        'Clinic__id' => array(
        	'Int',
        	array(
        		'Comment' => 'Клиника',
        		'Not_Null'
    		)
    	),
        'Metro__id' => array(
        	'Int',
        	array(
        		'Comment' => 'Метро',
        		'Not_Null'
    		)
    	),
        'sort' => array(
        	'Smallint',
        	array(
        		'Size' => '6',
        		'Default' => 0
,
        		'Comment' => 'Сортировка',
        		'Not_Null'
    		)
    	),
        'active' => array(
        	'Tinyint',
        	array(
        		'Size' => '1',
        		'Default' => '1',
        		'Comment' => 'Активно',
        		'Not_Null'
    		)
    	),
        'position' => array(
        	'Smallint',
        	array(
        		'Size' => '6',
        		'Default' => 0
,
        		'Comment' => 'Позиция в результатах поиска',
        		'Not_Null'
    		)
    	)
    ),	                'indexes'		=> array(
        'id' => array(
        	'Primary',
        	array(
        		'id'
    		)
    	)
    )        );
