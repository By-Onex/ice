<?php

return array (
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
		'type'	=> array (
			'Text',
			array (
				'Comment'	=> 'Вид шаблона - для чего шаблон применяется',
				'Null'
			)
		),
		'name'	=> array (
			'Text',
			array (
				'Comment'	=> 'Наименование шаблона',
				'Null'
			)
		),
		'header'	=> array (
			'Text',
			array (
				'Comment'	=> 'Верх шаблона',
				'Null'
			)
		),
		'footer'	=> array (
			'Text',
			array (
				'Comment'	=> 'Низ шаблона',
				'Null'
			)
		)
	)
	);
