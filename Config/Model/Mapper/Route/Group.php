<?php

return array (
    
        
    
	        'comment'		=> 'Группы роутеров',
	            'author'		=> 'denis.d',
	                'fields'            => array(
        'id' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Comment' => 'id',
        		'Not_Null',
        		'Auto_Increment'
    		)
    	),
        'name' => array(
        	'Varchar',
        	array(
        		'Size' => '64',
        		'Comment' => 'Название',
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
