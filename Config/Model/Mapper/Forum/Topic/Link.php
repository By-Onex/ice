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
		'Forum_Topic__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Comment'	=> 'id топика форума',
				'Null'
			)
		),
		'toTable'	=> array (
			'Varchar',

			array (
				'Size'	=> 64,
				'Comment'	=> 'Название модели для связи',
				'Null'
			)
		),
		'toRowId'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Comment'	=> 'id в таблице связываемой модели',
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
