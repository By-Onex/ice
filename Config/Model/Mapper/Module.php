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
        'active' => array(
        	'Tinyint',
        	array(
        		'Size' => '1',
        		'Not_Null'
    		)
    	),
        'isMain' => array(
        	'Tinyint',
        	array(
        		'Size' => '1',
        		'Not_Null'
    		)
    	),
        'path' => array(
        	'Varchar',
        	array(
        		'Size' => '128',
        		'Not_Null'
    		)
    	),
        'hasResource' => array(
        	'Tinyint',
        	array(
        		'Size' => '1',
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
