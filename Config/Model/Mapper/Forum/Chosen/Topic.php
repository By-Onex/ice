<?php

return array (
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
		'title'	=> array (
			'Varchar',
			array (
				'Size'	=> 256,
				'Default'	=> null,
				'Comment'	=> 'Заголовок',
				'Null'
			)
		),
		'message'	=> array (
			'Text',
			array (
				'Comment'	=> 'Текст сообщения',
				'Null'
			)
		),
		'Forum_Topic__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'ID темы форума',
				'Null'
			)
		),
		'Forum_Post__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'ID сообщения форума',
				'Null'
			)
		),
		'message_time'	=> array (
			'Datetime',
			array (
				'Comment'	=> 'Дата сообщения',
				'Null'
			)
		),
		'priority'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Приоритет выдачи',
				'Null'
			)
		)
	)
	);
