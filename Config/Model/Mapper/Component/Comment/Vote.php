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
		'Comment__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Комментарий',
				'Null'
			)
		),
		'vote'	=> array (
			'Tinyint',
			array (
				'Size'	=> 4,
				'Null'
			)
		),
		'session_id'	=> array (
			'Varchar',
			array (
				'Size'	=> 32,
				'Default'	=> null,
				'Null'
			)
		),
		'cookie_id'	=> array (
			'Varchar',
			array (
				'Size'	=> 32,
				'Default'	=> null,
				'Null'
			)
		),
		'ip'	=> array (
			'Varchar',
			array (
				'Size'	=> 20,
				'Default'	=> null,
				'Null'
			)
		),
		'vote_date'	=> array (
			'Datetime',
			array (
				'Null'
			)
		)
	)
	);
