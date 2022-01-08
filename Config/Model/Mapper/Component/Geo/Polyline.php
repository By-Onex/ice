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
		'table'	=> array (
			'Varchar',
			array (
				'Size'	=> 32,
				'Default'	=> null,
				'Null'
			)
		),
		'rowId'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'longitude'	=> array (
			'Double',
			array (
				'Default'	=> null,
				'Null'
			)
		),
		'latitude'	=> array (
			'Double',
			array (
				'Default'	=> null,
				'Null'
			)
		),
		'styleData'	=> array (
			'Text',
			array (
				'Null'
			)
		),
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 64,
				'Default'	=> null,
				'Null'
			)
		),
		'Geo_Line_Style__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Null'
			)
		),
		'description'	=> array (
			'Text',
			array (
				'Null'
			)
		)
	)
	);
