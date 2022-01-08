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
		'Forum_Poll__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'title'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		),
		'voteCount'	=> array (
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
		'sort'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		)
	)
	);
