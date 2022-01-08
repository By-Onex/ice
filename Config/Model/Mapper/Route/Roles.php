<?php

return array (
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 10,
				'Comment'	=> 'id',
				'Null',
				'Auto_Increment'
			)
		),
		'Acl_Role__id'	=> array (
			'Int',
			array (
				'Size'	=> 10,
				'Comment'	=> 'id роли',
				'Not_Null'
			)
		),
		'Route_Admin__id'	=> array (
			'Int',
			array (
				'Size'	=> 10,
				'Comment'	=> 'id роута',
				'Not_Null'
			)
		)
	)
	);
