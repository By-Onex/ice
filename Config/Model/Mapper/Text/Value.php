<?php

return array (
	'comment'		=> 'Соответствия значений полей в различных таблицах и их тексто',
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
		'tv_field_table'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Таблица, поле которой подлежит подстановке',
				'Null'
			)
		),
		'tv_field_name'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Имя поля, подлежащего подстановке',
				'Null'
			)
		),
		'tv_text_table'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Таблица, из которой осуществляется подстановка',
				'Null'
			)
		),
		'tv_text_field'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Поле, значение которого подставляется',
				'Null'
			)
		),
		'tv_text_link_field'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Контрольное поле, при совпадении которого делается подстановка',
				'Null'
			)
		),
		'tv_text_link_condition'	=> array (
			'Text',
			array (
				'Comment'	=> 'Текст sql-условия выбора множества подстановок',
				'Null'
			)
		)
	)
	);
