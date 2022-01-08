<?php

return array (
	'admin' => array(
		'fields' => array(
			'id', 'name'
		),
		
		'links' => array(
			'id', 'name'
		),
		
		'limit' => 30
	),
	'comment'		=> 'Шаблоны оформления ссылок на блоги, сайты, соцсети пользоват',
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
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Comment'	=> 'Название шаблона',
				'Null'
			)
		),
		'priority'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Приоритет в последовательности распознавания',
				'Null'
			)
		),
		'linkTemplate'	=> array (
			'Text',
			array (
				'Comment'	=> 'Smarty-шаблон оформления ссылки',
				'Null'
			)
		),
		'regexp'	=> array (
			'Varchar',
			array (
				'Size'	=> 512,
				'Default'	=> null,
				'Comment'	=> 'Регулярное выражение для автоопределения шаблона',
				'Null'
			)
		)
	)
	);
