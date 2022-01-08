<?php

return array (
	'admin' => array(
		'fields' => array(
			'id', 'name', 'link'
		),
		
		'links' => array(
			'id', 'name'
		),
	),
	'comment'		=> 'Справочник медикаментов',
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
		'name'	=> array (
			'Text',
			array (
				'Comment'	=> 'Название медикамента',
				'Null'
			)
		),
		'link'	=> array (
			'Varchar',
			array (
				'Size'	=> 32,
				'Default'	=> null,
				'Comment'	=> 'Ссылка на страницу медикамента',
				'Null'
			)
		),
		'text'	=> array (
			'Text',
			array (
				'Comment'	=> 'Описание медикамента',
				'Null'
			)
		),
		'tablet'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Производится ли в виде таблеток',
				'Null'
			)
		),
		'aerosol'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Производится ли в виде аэрозоля',
				'Null'
			)
		),
		'rastvor'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Производится ли в виде раствора',
				'Null'
			)
		),
		'gel'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Производится ли в виде геля',
				'Null'
			)
		),
		'fito'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Является ли растительным препаратом',
				'Null'
			)
		),
		'toothpaste'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Производится ли в виде зубной пасты',
				'Null'
			)
		),
		'balsam'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Производится ли в виде бальзама',
				'Null'
			)
		),
		'other'	=> array (
			'Tinyint',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Другое (не входит ни в одну из категорий)',
				'Null'
			)
		)
	)
	);
