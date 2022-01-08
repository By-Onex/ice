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
		'User__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'id пользователя для которого указана избраная таблица',
				'Not_Null'
			)
		),
		'model'	=> array (
			'Varchar',
			array (
				'Size'	=> 100,
				'Default'	=> null,
				'Comment'	=> 'Название модели соответствующее избранной таблице',
				'Not_Null'
			)
		)
	),
	'indexes'		=> array (
		'id_index'	=> array (
			'Primary',
			array ('id')
		),			'User__id_index_index_index'	=> array (
			'Key',
			array ('User__id')
		)			
	)
);
