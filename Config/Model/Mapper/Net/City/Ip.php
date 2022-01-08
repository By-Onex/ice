<?php

return array (
    
        
    
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				                                                                                            'Size'	=>
                                                                    11
                                                                ,
                                                                            
			                    	                                                                        'Not_Null'
                                                ,                    
			                    	                                                                        'Auto_Increment'
                                                                    
			)
		),
		'Net_City__id'	=> array (
			'Int',

			array (
				                                                                                            'Size'	=>
                                                                    11
                                                                                                            
			)
		),
		'begin_ip'	=> array (
			'Bigint',

			array (
				                                                                                            'Size'	=>
                                                                    11
                                                                                                            
			)
		),
		'end_ip'	=> array (
			'Bigint',

			array (
				                                                                                            'Size'	=>
                                                                    11
                                                                                                            
			)
		)
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		),
		'city_id_index_index'	=> array (
			'Key',
			array ('Net_City__id')
		),
		'begin_ip_end_ip_index_index'	=> array (
			'Key',
			array ('begin_ip')
		)
		
	)
	
);
