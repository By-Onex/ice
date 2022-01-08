<?php

return array (
	'admin' => array(
		'fields' => array(
			'id', 'name', 'cat_parent', 'City__id'
		),
		
		'links' => array(
			'id', 'name'
		),
		
		'includes' => array(
			'cat_parent' => 'Article_Category',
			'City__id'	 => 'City'
		),
		
		'limitators' => array(
			'cat_parent', 'City__id'
		),
		
		'filters' => array(
			'City__id' => 'City::id'
		),
	),
	'comment'		=> 'Категории статей',
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
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Название категории',
				'Null'
			)
		),
		'stat_header'	=> array (
			'Text',
			array (
				'Comment'	=> 'Заголовок для блока статей данной категории',
				'Null'
			)
		),
		'cat_parent'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Родительская категория для данной категории (если родителей нет, то минус 1)',
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
