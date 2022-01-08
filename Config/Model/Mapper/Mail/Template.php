<?php

return array (
    
    
    
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null',
				'Auto_Increment'
			)
		),
		'name'	=> array (
			'Varchar',

			array (
				'Size'	=> 128,
				'Not_Null'
			)
		),
		'parentId'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null'
			)
		),
		'subject'	=> array (
			'Varchar',

			array (
				'Size'	=> 128,
				'Not_Null'
			)
		),
		'body'	=> array (
			'Text',

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
		'name'	=> array (
			'Key',
			array ('name')
		),
		'parentId'	=> array (
			'Key',
			array ('parentId')
		)
		
	)
	
);
