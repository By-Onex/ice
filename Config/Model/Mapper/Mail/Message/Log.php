<?php

return array (
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'id',
				'Null',
				'Auto_Increment'
			)
		),
		'time'	=> array (
			'Datetime',
			array (
				'Comment'	=> 'Время',
				'Null'
			)
		),
		'mailProvider'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Провайдер',
				'Null'
			)
		),
		'Mail_Message__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Сообщение',
				'Null'
			)
		),
		'state'	=> array (
			'Varchar',
			array (
				'Size'	=> 50,
				'Default'	=> null,
				'Comment'	=> 'Состояние',
				'Null'
			)
		),
		'comment'	=> array (
			'Text',
			array (
				'Comment'	=> 'Дополнитеьная информация',
				'Null'
			)
		)
	)
	);
