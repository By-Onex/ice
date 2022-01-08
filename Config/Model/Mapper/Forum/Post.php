<?php

return array (
	'admin' => array(
		// Выводимые поля
		'fields'  => array (
			'id', 'message', 'createdAt',
			'isModerated'
		),
		
		'limit' => 30,
		
		
	),
	'comment'		=> 'Посты с форума',
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null',
				'Auto_Increment'
			)
		),
		'message'	=> array (
			'Text',
			array (
				'Comment'	=> 'Текст сообщения',
				'Null'
			)
		),
		'createdAt'	=> array (
			'Datetime',
			array (
				'Comment'	=> 'Дата добавления',
				'Null'
			)
		),
		'lastEditedAt'	=> array (
			'Datetime',
			array (
				'Null'
			)
		),
		'User__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'userName'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		),
		'Forum_Topic__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'Forum_Board__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'Forum__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'Forum_Poll__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'active'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Null'
			)
		),
        'hidden'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Null'
			)
		),
		'isEdited'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Null'
			)
		),
		'isModerated'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Прошло модерацию',
				'Null'
			)
		),
		'filesJson'	=> array (
			'Text',
			array (
				'Null'
			)
		),
		'phpSessionId'	=> array (
			'Varchar',
			array (
				'Size'	=> 92,
				'Default'	=> null,
				'Null'
			)
		),
		'ip'	=> array (
			'Varchar',
			array (
				'Size'	=> 20,
				'Default'	=> null,
				'Comment'	=> 'Ip автора',
				'Null'
			)
		)
	)
	);
