<?php

return array (
	
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Null',
				'Auto_Increment'
			)
		),
		'table'	=> array (
			'Varchar',

			array (
				'Size'	=> 40,
				'Default'	=> null,
				'Not_Null'
			)
		),
		'rowId'	=> array (
			'Varchar',

			array (
				'Size'	=> 64,
				'Default'	=> null,
				'Not_Null'
			)
		),
		'email'	=> array (
			'Varchar',

			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Not_Null'
			)
		),
		'time'	=> array (
			'Datetime',

			array (
				'Not_Null'
			)
		)
	),
	'indexes'		=> array (
		'id_index'	=> array (
			'Primary',
			array ('id')
		)
		
	)
	
);
