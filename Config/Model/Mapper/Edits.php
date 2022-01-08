<?php

return array (
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Первичный ключ',
				'Null',
				'Auto_Increment'
			)
		),
		'edits_table'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Имя таблицы, запись которой предлагается править',
				'Null'
			)
		),
		'edits_field'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Поле таблицы, которое нужно править у записи',
				'Null'
			)
		),
		'edits_table_id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'id записи, в которой нужно что-то менять',
				'Null'
			)
		),
		'edits_offer'	=> array (
			'Text',
			array (
				'Null'
			)
		)
	)
	);
