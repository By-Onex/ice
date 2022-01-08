<?php

return array (
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'id',
				'Null',
				'Auto_Increment'
			)
		),
		'table'	=> array (
			'Varchar',
			array (
				'Size'	=> 100,
				'Default'	=> null,
				'Comment'	=> 'Таблица',
				'Null'
			)
		),
		'rowId'	=> array (
			'Varchar',
			array (
				'Size'	=> 64,
				'Default'	=> null,
				'Comment'	=> 'Запись',
				'Null'
			)
		),
		'key'	=> array (
			'Varchar',
			array (
				'Size'	=> 100,
				'Default'	=> null,
				'Comment'	=> 'Название аттрибута',
				'Null'
			)
		),
		'value'	=> array (
			'Text',
			array (
				'Comment'	=> 'Значение',
				'Null'
			)
		)
	)
	);
