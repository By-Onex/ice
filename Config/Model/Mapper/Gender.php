<?php

return array (
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Tinyint',
			array (
				'Size'	=> 3,
				'Comment'	=> 'Первичный ключ',
				'Null',
				'Auto_Increment'
			)
		),
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 32,
				'Default'	=> null,
				'Comment'	=> 'Название рода',
				'Null'
			)
		)
	)
	);
