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
        'name' => array(
        	'Varchar',
        	array(
        		'Size' => '128',
        		'Not_Null'
    		)
    	),
        'tabName' => array(
        	'Varchar',
        	array(
        		'Size' => '128',
        		'Not_Null'
    		)
    	),
        'title' => array(
        	'Varchar',
        	array(
        		'Size' => '128',
        		'Not_Null'
    		)
    	),
        'active' => array(
        	'Tinyint',
        	array(
        		'Size' => '1',
        		'Default' => '1',
        		'Not_Null'
    		)
    	),
        'sort' => array(
        	'Smallint',
        	array(
        		'Size' => '6',
        		'Default' => 0
,
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
