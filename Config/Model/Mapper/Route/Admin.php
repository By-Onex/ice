<?php

return array (
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 10,
				'Null',
				'Auto_Increment'
			)
		),
		'pattern'	=> array (
			'Varchar',
			array (
				'Size'	=> 150,
				'Default'	=> null,
				'Comment'	=> 'pattern роута',
				'Not_Null'
			)
		),
		'title'	=> array (
			'Varchar',
			array (
				'Size'	=> 150,
				'Default'	=> null,
				'Comment'	=> 'название роута',
				'Not_Null'
			)
		)
	)
	);
