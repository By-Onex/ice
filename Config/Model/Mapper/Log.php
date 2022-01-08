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
		'time'	=> array (
			'Datetime',
			array (
				'Null'
			)
		),
		'where'	=> array (
			'Text',
			array (
				'Not_Null'
			)
		),
		'text'	=> array (
			'Text',
			array (
				'Not_Null'
			)
		),
		'type'	=> array (
			'Varchar',
			array (
				'Size'	=> 10,
				'Default'	=> 'LOG',
				'Null'
			)
		)
	)
	);
