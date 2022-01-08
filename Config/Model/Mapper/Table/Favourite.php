<?php

return array (
    
            
    
	                    'fields'            => array(
        'id' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Not_Null',
        		'Auto_Increment'
    		)
    	),
        'User__id' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Comment' => 'Id пользователя',
        		'Not_Null'
    		)
    	),
        'table' => array(
        	'Varchar',
        	array(
        		'Size' => '128',
        		'Comment' => 'Таблица',
        		'Not_Null'
    		)
    	)
    ),	                'indexes'		=> array(
        'id' => array(
        	'Primary',
        	array(
        		'id'
    		)
    	),
        'main' => array(
        	'Key',
        	array(
        		'User__id',
        		'table'
    		)
    	)
    )        );
