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
		'Doctor__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Доктор',
				'Null'
			)
		),
		'Metro__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Станция метро',
				'Null'
			)
		),
		'position'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Позиция',
				'Null'
			)
		)
	)
	);
