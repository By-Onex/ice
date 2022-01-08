<?php

return array (
	'author'		=> 'denis.d',
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
				'Size'	=> 32,
				'Default'	=> null,
				'Null'
			)
		),
		'value'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Null'
			)
		)
	)
	);
