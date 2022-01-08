<?php

return array (
	'admin' => array(
		'fields' => array(
			'id', 'page_url', 'page_title', 'City__id'
		),
		
		'includes' => array(
			'City__id' => 'City'
		),
		
		'limit' => 30,
		
		'links' => array(
			'id', 'page_title'
		),
		'filters' => array(
			'City__id' => 'City::id'
		),
	),
	'comment'		=> 'Настройки страниц - мета-теги и прочее ',
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
		'page_url'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'URL страницы',
				'Null'
			)
		),
		'meta_description'	=> array (
			'Text',
			array (
				'Comment'	=> 'Мета-тег description',
				'Null'
			)
		),
		'meta_keywords'	=> array (
			'Varchar',
			array (
				'Size'	=> 10240,
				'Default'	=> null,
				'Comment'	=> 'Мета-тег keywords',
				'Null'
			)
		),
		'head_tags'	=> array (
			'Text',
			array (
				'Comment'	=> 'Произвольный HTML в разделе head',
				'Null'
			)
		),
		'meta_enabled'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Включить мета-теги (больше нуля - включено)',
				'Null'
			)
		),
		'page_title'	=> array (
			'Varchar',
			array (
				'Size'	=> 10240,
				'Default'	=> null,
				'Comment'	=> 'title страницы',
				'Null'
			)
		),
		'page_text'	=> array (
			'Text',
			array (
				'Comment'	=> 'Текст страницы',
				'Null'
			)
		),
		'page_text_bottom'	=> array (
			'Text',
			array (
				'Comment'	=> 'Текст страницы снизу',
				'Null'
			)
		),
		'cache_path'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Путь к файлу кэша страницы',
				'Null'
			)
		),
		'cashe_enabled'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Разрешено ли кэширование страницы на стороне сервера',
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
		)
	)
	);
