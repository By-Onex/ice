<?php

return array (
	'admin' => array(
		
		'fields' => array(
			'id', 'name'
		),
		
		'links' => array(
			'id', 'name'
		),
		
		'filters' => array(
			'City__id' => 'City::id'
		),
		
		'limit' => 30,
	),
	'comment'		=> 'Районы',
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
		'spb_id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> '',
				'Null'
			)
		),
		'shortname'	=> array (
			'Varchar',
			array (
				'Size'	=> 64,
				'Default'	=> null,
				'Comment'	=> 'Сокращенное название округа',
				'Null'
			)
		),
		'shortnameRodPadezh'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Comment'	=> 'Сокращенное наименование округа или района в родительном падеже для заголовков страниц',
				'Null'
			)
		),
		'text'	=> array (
			'Text',
			array (
				'Null'
			)
		),
		'translit'	=> array (
			'Varchar',
			array (
				'Size'	=> 64,
				'Default'	=> null,
				'Null'
			)
		),
		'City__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Город',
				'Null'
			)
		)
	)
	);
