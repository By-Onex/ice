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
		'User__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Comment'	=> 'id пользователя',
				'Null'
			)
		),
		'value'	=> array (
			'Varchar',

			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Значение контакта',
				'Null'
			)
		),
		'type'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Comment'	=> 'Тип контакта',
				'Null'
			)
		)
	),
	'indexes'		=> array (
		'id_index'	=> array (
			'Primary',
			array ('id')
		)
		
	)
	
);
