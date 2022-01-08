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
		'country_id'	=> array (
			'Int',

			array (
				                                                                                            'Size'	=>
                                                                    11
                                                                                                            
			)
		),
		'name_ru'	=> array (
			'Varchar',

			array (
				                                                                                            'Size'	=>
                                                                    100
                                                                                                            
			)
		),
		'name_en'	=> array (
			'Varchar',

			array (
				                                                                                            'Size'	=>
                                                                    100
                                                                                                            
			)
		),
		'region'	=> array (
			'Varchar',

			array (
				                                                                                            'Size'	=>
                                                                    2
                                                                                                            
			)
		),
		'postal_code'	=> array (
			'Varchar',

			array (
				                                                                                            'Size'	=>
                                                                    10
                                                                                                            
			)
		),
		'latitude'	=> array (
			'Varchar',

			array (
				                                                                                            'Size'	=>
                                                                    10
                                                                                                            
			)
		),
		'longitude'	=> array (
			'Varchar',

			array (
				                                                                                            'Size'	=>
                                                                    10
                                                                                                            
			)
		)
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		),
		'country_id'	=> array (
			'Key',
			array ('country_id')
		),
		'name_ru'	=> array (
			'Key',
			array ('name_ru')
		),
		'name_en'	=> array (
			'Key',
			array ('name_en')
		)
		
	)
	
);
