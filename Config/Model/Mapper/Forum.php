<?php

return array (
    'admin' => array(
                'fields'  => array (
			'id', 'title', 'description'
		),
                'title' => array(
                    'title' => 'Название'
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
				'Comment'	=> 'Название форума',
				'Null'
			)
		),
		'url'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Comment'	=> 'Название форума',
				'Null'
			)
		),
		'description'	=> array (
			'Text',
			array (
				'Comment'	=> 'Описание форума',
				'Null'
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
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		),
		'logo'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		),
		'listName'	=> array (
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
		'sort'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'active'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		)
	)
	);
