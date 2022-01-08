<?php

return array (
    'signals'   =>  array(
        'afterDelete'   =>  'deleteForumTopic',
        'afterInsert' => 'insertForumTopic'

    ),
	'admin' => array(
		// Выводимые поля
		'fields'  => array (
			'id', 'title', 'userName',
			'boardName'
		),
		
		'limit' => 30,
		
		
	),
	'comment'		=> 'Топики',
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
				'Comment'	=> 'Заголовок темы',
				'Null'
			)
		),
		'isLock'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Comment'	=> 'Тема прикреплена к верху',
				'Null'
			)
		),
		'isClosed'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Comment'	=> 'Тема закрыта',
				'Null'
			)
		),
		'active'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Comment'	=> 'Тема показывается',
				'Null'
			)
		),
		'sort'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Сортировка',
				'Null'
			)
		),
		'authorId'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'authorName'	=> array (
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
		'userName'	=> array (
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
		'createdAt'	=> array (
			'Datetime',
			array (
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
		'viewCount'	=> array (
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
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Город пользователя для раздела Консультации'
            )
        ),
		'boardName'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
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
		'forumName'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		),
		'short'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
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
		'startPostId'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Первый пост топика',
				'Null'
			)
		),
		'table'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Таблица с которой осуществляется синхронизация',
				'Not_Null'
			)
		),
		'rowId'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Строка таблицы',
				'Not_Null'
			)
		)
	)
	);
