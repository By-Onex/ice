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
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 50,
				'Default'	=> null,
				'Comment'	=> 'Название',
				'Null'
			)
		),
		'description'	=> array (
			'Varchar',
			array (
				'Size'	=> 200,
				'Default'	=> null,
				'Comment'	=> 'Описание',
				'Null'
			)
		)
	)
	);
