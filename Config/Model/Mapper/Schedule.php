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
        'controllerAction' => array(
        	'Varchar',
        	array(
        		'Size' => '128',
        		'Not_Null'
    		)
    	),
        'paramsJson' => array(
        	'Varchar',
        	array(
        		'Size' => '255',
        		'Not_Null'
    		)
    	),
        'deltaSec' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Not_Null'
    		)
    	),
        'lastTs' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Not_Null'
    		)
    	),
        'lastDate' => array(
        	'Datetime',
        	array(
        		'Not_Null'
    		)
    	),
        'priority' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Not_Null'
    		)
    	),
        'inProcess' => array(
        	'Tinyint',
        	array(
        		'Size' => '1',
        		'Not_Null'
    		)
    	),
        'exectTime' => array(
        	'Datetime',
        	array(
        		'Not_Null'
    		)
    	),
        'hasExectTime' => array(
        	'Tinyint',
        	array(
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
        'priority' => array(
        	'Key',
        	array(
        		'priority'
    		)
    	)
    )        );
