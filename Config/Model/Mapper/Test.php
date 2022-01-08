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
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 256,
				'Default'	=> null,
				'Null'
			)
		),
		'size'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'mtime'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'hash'	=> array (
			'Varchar',
			array (
				'Size'	=> 256,
				'Default'	=> null,
				'Null'
			)
		)
	)
	);
