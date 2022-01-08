<?php

return array (
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
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Наименование',
				'Null'
			)
		),
		'text'	=> array (
			'Text',
			array (
				'Comment'	=> 'Сопроводительный текст',
				'Null'
			)
		),
		'translit'	=> array (
			'Varchar',
			array (
				'Size'	=> 16,
				'Default'	=> null,
				'Comment'	=> 'Транслит наименования',
				'Null'
			)
		)
	)
	);
