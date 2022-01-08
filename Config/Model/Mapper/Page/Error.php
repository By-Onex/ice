<?php

return array (
	'admin' => array(
		'fields' => array(
			'id', 'pe_url', 'City__id', 'pe_http_code', 'pe_enabled'
		),
		
		'links' => array(
			'id', 'pe_url'
		),
		
		'limit' => 30
	),
	'comment'		=> 'Страницы ошибок',
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
		'pe_url'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'URL страницы',
				'Null'
			)
		),
		'City__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Город',
				'Null'
			)
		),
		'pe_http_code'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Код статуса HTTP',
				'Null'
			)
		),
		'pe_redirect_url'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Перенаправить на URL',
				'Null'
			)
		),
		'pe_comment'	=> array (
			'Varchar',
			array (
				'Size'	=> 4096,
				'Default'	=> null,
				'Comment'	=> 'Комментарий',
				'Null'
			)
		),
		'pe_enabled'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Статус активен',
				'Null'
			)
		)
	)
	);
