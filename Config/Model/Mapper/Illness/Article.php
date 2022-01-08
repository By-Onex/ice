<?php

return array (
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'первичный ключ',
				'Null',
				'Auto_Increment'
			)
		),
		'Illness__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'ID болезни',
				'Null'
			)
		),
		'Article__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'ID статьи',
				'Null'
			)
		)
	)
	);
