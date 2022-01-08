<?php

return array (
    
    
    
	'comment'		=> 'Категории лекарства',
	'author'		=> 'markov',
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
				'Size'	=> 64,
				'Not_Null'
			)
		),
		'title'	=> array (
			'Varchar',

			array (
				'Size'	=> 128,
				'Not_Null'
			)
		),
		'active'	=> array (
			'Tinyint',

			array (
				'Size'	=> 1,
				'Not_Null'
			)
		),
		'sort'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null'
			)
		)
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		),
		'active'	=> array (
			'Key',
			array ('active')
		)
		
	)
	
);
