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
        'Medication__id' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Not_Null'
    		)
    	),
        'Illness__id' => array(
        	'Int',
        	array(
        		'Size' => '11',
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
        'Medication__id' => array(
        	'Key',
        	array(
        		'Medication__id'
    		)
    	),
        'Illness__id' => array(
        	'Key',
        	array(
        		'Illness__id'
    		)
    	)
    )        );
