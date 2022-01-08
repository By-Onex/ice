<?php

return array (
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
		'Forum_Poll_Item__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'timestamp'	=> array (
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
		'createdAt'	=> array (
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
		'phpSessionId'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		),
		'userAgent'	=> array (
			'Text',
			array (
				'Null'
			)
		),
		'ip'	=> array (
			'Varchar',
			array (
				'Size'	=> 50,
				'Default'	=> null,
				'Null'
			)
		)
	)
	);
