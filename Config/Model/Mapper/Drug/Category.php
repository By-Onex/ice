<?php

return array (
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Smallint',
			array (
				'Size'	=> 11,
				'Null',
				'Auto_Increment'
			)
		),
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Название',
				'Not_Null'
			)
		),
		'plural'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Название во множественном числе',
				'Not_Null'
			)
		),
		'translit'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Транслит',
				'Not_Null'
			)
		),
		'active'	=> array (
			'Smallint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Показывать',
				'Null'
			)
		),
		'sort'	=> array (
			'Smallint',
			array (
				'Size'	=> 11,
				'Default'	=> 1,
				'Comment'	=> 'Сортировка',
				'Null'
			)
		)
	)
	);
