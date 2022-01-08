<?php

return array (
    
        
    
	            'author'		=> 'denis.d',
	                'fields'            => array(
        'id' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Not_Null',
        		'Auto_Increment'
    		)
    	),
        'Route__id' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Not_Null'
    		)
    	),
        'Controller_Action__id' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Not_Null'
    		)
    	),
        'sort' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Default' => '1',
        		'Not_Null'
    		)
    	),
        'assign' => array(
        	'Varchar',
        	array(
        		'Size' => '64',
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
        'routeID' => array(
        	'Key',
        	array(
        		'Route__id'
    		)
    	),
        'resourceID' => array(
        	'Key',
        	array(
        		'Controller_Action__id'
    		)
    	)
    )        );
