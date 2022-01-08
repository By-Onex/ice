<?php

return array (
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
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 100,
				'Default'	=> null,
				'Comment'	=> 'Имя',
				'Null'
			)
		),
		'Acl_Role_Type__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Тип',
				'Null'
			)
		),
		'rate'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Рейтинг',
				'Null'
			)
		),
		'description'	=> array (
			'Text',
			array (
				'Null'
			)
		)
	)
	);
