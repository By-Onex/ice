<?php

return array (
	'admin' => array(
		'fields' => array(
			'id', 'ep_status_code', 'ep_status', 'ep_descr'
		),
		
		'links' => array(
			'id', 'ep_status_code', 'ep_status', 'ep_descr'
		),
	),
	'comment'		=> 'Страницы ошибок',
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Smallint',
			array (
				'Size'	=> 6,
				'Comment'	=> 'Первичный ключ',
				'Null',
				'Auto_Increment'
			)
		),
		'ep_status_code'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Цифровой код статуса',
				'Null'
			)
		),
		'ep_status'	=> array (
			'Varchar',
			array (
				'Size'	=> 64,
				'Default'	=> null,
				'Comment'	=> 'HTTP-статус страницы',
				'Null'
			)
		),
		'ep_descr'	=> array (
			'Varchar',
			array (
				'Size'	=> 64,
				'Default'	=> null,
				'Comment'	=> 'Пояснение HTTP-статуса',
				'Null'
			)
		),
		'ep_html'	=> array (
			'Text',
			array (
				'Comment'	=> 'Содержимое страницы',
				'Null'
			)
		)
	)
	);
