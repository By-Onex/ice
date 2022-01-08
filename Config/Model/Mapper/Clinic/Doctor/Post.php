<?php

return array (
	'comment'		=> 'Должности докторов в клиниках',
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
		'Clinic_Doctor_Link__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'ид записи связи доктора и клиники',
				'Null'
			)
		),
		'post'	=> array (
			'Varchar',
			array (
				'Size'	=> 50,
				'Default'	=> '',
				'Comment'	=> 'Должность',
				'Null'
			)
		),
		'active'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 1,
				'Comment'	=> 'Видимость',
				'Null'
			)
		)
	)
	);
