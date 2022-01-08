<?php

return array (
	'admin' => array(
                'fields'  => array (
			'id', 'title', 'description'
		)
 	),
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
		'title'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Comment'	=> 'Заголовок доски',
				'Null'
			)
		),
		'description'	=> array (
			'Text',
			array (
				'Comment'	=> 'Описание доски',
				'Null'
			)
		),
		'fullDescription'	=> array (
			'Text',
			array (
				'Comment'	=> 'Полное описание раздела (для текстового поля над топиками)',
				'Not_Null'
			)
		),
		'topicCount'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'postCount'	=> array (
			'Int',
			array (
				'Size'	=> 11,
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
		'lastTopicName'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		),
		'lastPostDate'	=> array (
			'Datetime',
			array (
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
		'User__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'parentId'	=> array (
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
		'sort'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Порядок следования',
				'Null'
			)
		),
		'active'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Comment'	=> 'Активность',
				'Null'
			)
		),
		'forumName'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		),
		'forumUrl'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		),
		'table'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Таблица с которой осуществляется связь',
				'Not_Null'
			)
		),
		'City__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Город с которым осуществляется связь',
				'Not_Null'
			)
		),
		'hideEmpty'	=> array (
			'Int',
			array (
				'Size'	=> 4,
				'Comment'	=> 'Скрывать или нет пустые топики в данном разделе',
				'Null'
			)
		)
	)
	);
