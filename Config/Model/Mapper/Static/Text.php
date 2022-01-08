<?php

return array (
	'comment'		=> 'Статичные тексты',
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Tinyint',
			array (
				'Size'	=> 4,
				'Null',
				'Auto_Increment'
			)
		),
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Наименование текста',
				'Null'
			)
		),
		'text'	=> array (
			'Text',
			array (
				'Null'
			)
		),
		'page_title'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Null'
			)
		)
	)
	);
