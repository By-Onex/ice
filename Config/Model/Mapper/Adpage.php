<?php

return array (
	'admin' => array(
		'filters' => array(
			'City__id' => 'City::id'
		),
	),
	'comment'		=> 'Рекламные страницы',
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'ID',
				'Null',
				'Auto_Increment'
			)
		),
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 256,
				'Default'	=> null,
				'Comment'	=> 'Заголовок',
				'Null'
			)
		),
		'htmlCode'	=> array (
			'Text',
			array (
				'Comment'	=> 'HTML-код ссылки',
				'Null'
			)
		),
		'description'	=> array (
			'Text',
			array (
				'Comment'	=> 'Описание',
				'Null'
			)
		),
		'priority'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Приоритет',
				'Null'
			)
		),
		'active'	=> array (
			'Tinyint',
			array (
				'Size'	=> 4,
				'Default'	=> 0,
				'Comment'	=> 'Показывать',
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
		'date_out'	=> array (
			'Date',
			array (
				'Comment'	=> 'Дата самоотключения',
				'Null'
			)
		)
	)
	);
