<?php

return array (
	'comment'		=> 'Профиль в соцсетях, сайт или блог',
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
		'table'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Таблица-владелец сущности',
				'Null'
			)
		),
		'rowId'	=> array (
			'Varchar',
			array (
				'Size'	=> 64,
				'Default'	=> null,
				'Comment'	=> 'ID сущности в таблице',
				'Null'
			)
		),
		'url'	=> array (
			'Varchar',
			array (
				'Size'	=> 512,
				'Default'	=> null,
				'Comment'	=> 'УРЛ страницы профиля, сайта или блога',
				'Null'
			)
		),
		'text'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Текст, alt и title ссылки',
				'Null'
			)
		),
		'Component_Web_Page_Template__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 1,
				'Comment'	=> 'Шаблон оформления ссылки на профиль',
				'Null'
			)
		),
		'priority'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Приоритет данной ссылки в коллекции профилей сущности',
				'Null'
			)
		)
	)
	);
