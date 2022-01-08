<?php

return array (
    
    
    
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				                                                                                            'Size'	=> 
                                                                    11
                                                                ,
                                                                            
			                    	                                                                        'Not_Null'
                                                 
                    
			)
		),
		'hash'	=> array (
			'Varchar',

			array (
				                                                                                            'Size'	=> 
                                                                    33
                                                                ,
                                                                            
			                    	                                                                        'Not_Null'
                                                 
                    
			)
		),
		'controllerAction'	=> array (
			'Varchar',

			array (
				                                                                                            'Size'	=> 
                                                                    128
                                                                ,
                                                                            
			                    	                                                                        'Not_Null'
                                                 
                    
			)
		),
		'json'	=> array (
			'Mediumtext',

			array (
				                                                                                            'Not_Null'
                                                 
                    
			)
		),
		'createdAt'	=> array (
			'Datetime',

			array (
				                                                                                            'Not_Null'
                                                 
                    
			)
		)
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		),
		'hash'	=> array (
			'Key',
			array ('hash')
		),
		'action'	=> array (
			'Key',
			array ('hash')
		),
		'controllerAction'	=> array (
			'Key',
			array ('controllerAction')
		)
		
	)
	
);
