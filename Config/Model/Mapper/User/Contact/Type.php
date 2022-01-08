<?php

return array (
	
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
				'Size'	=> 32,
				'Default'	=> null,
				'Comment'	=> 'Название типа',
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
