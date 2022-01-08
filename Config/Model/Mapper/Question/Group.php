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
		'name'	=> array (
			'Text',
			array (
				'Comment'	=> 'Наименование группы вопросов',
				'Null'
			)
		),
		'style'	=> array (
			'Text',
			array (
				'Comment'	=> 'Наименование стилевого класса для данной группы',
				'Null'
			)
		)
	)
	);
