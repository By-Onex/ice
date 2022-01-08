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
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 100,
				'Default'	=> null,
				'Null'
			)
		)
	)
	);
