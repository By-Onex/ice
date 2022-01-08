<?php

return array (
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Первичный ключ',
				'Null',
				'Auto_Increment'
			)
		),
		'Clinic__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Null'
			)
		),
		'id_cena'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Null'
			)
		)
	)
	);
