<?php

return array (
    
    
    
	'comment'		=> 'Лог авторизации',
	'author'		=> 'neon',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null',
				'Auto_Increment'
			)
		),
		'IP'	=> array (
			'Varchar',

			array (
				'Size'	=> 32,
				'Not_Null'
			)
		),
		'User__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null'
			)
		),
		'createdAt'	=> array (
			'Datetime',

			array (
				'Not_Null'
			)
		)
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		),
		'User__id'	=> array (
			'Key',
			array ('User__id')
		)
		
	)
	
);
