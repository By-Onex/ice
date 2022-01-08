<?php

return array (
	'comment'		=> 'Новостные статьи',
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
		'title'	=> array (
			'Varchar',
			array (
				'Size'	=> 512,
				'Default'	=> null,
				'Comment'	=> 'Заголовок статьи',
				'Null'
			)
		),
		'text'	=> array (
			'Text',
			array (
				'Comment'	=> 'Текст статьи',
				'Null'
			)
		)
	)
	);
