<?php

return array (
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'id',
				'Null',
				'Auto_Increment'
			)
		),
		'spb_id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 100,
				'Default'	=> null,
				'Comment'	=> 'Имя',
				'Null'
			)
		),
		'controller'	=> array (
			'Varchar',
			array (
				'Size'	=> 100,
				'Default'	=> null,
				'Comment'	=> 'Контроллер',
				'Not_Null'
			)
		),
		'action'	=> array (
			'Varchar',
			array (
				'Size'	=> 100,
				'Default'	=> null,
				'Comment'	=> 'Действие',
				'Not_Null'
			)
		),
		'alias'	=> array (
			'Varchar',
			array (
				'Size'	=> 100,
				'Default'	=> null,
				'Comment'	=> 'Алиас',
				'Not_Null'
			)
		),
		'Acl_Resource_Type__id'	=> array (
			'Int',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Тип',
				'Null'
			)
		)
	)
	);
