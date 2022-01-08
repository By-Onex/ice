<?php

return array (
	'author'		=> 'denis.d',
    'updateSignal'  => true,
    'signals'       => array(
        'afterDelete'   => 'updateLink',
        'afterInsert'   => 'updateLink',
    ),
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
		'fromTable'	=> array (
			'Varchar',
			array (
				'Size'	=> 50,
				'Default'	=> null,
				'Comment'	=> 'Первая таблица',
				'Null'
			)
		),
		'fromRowId'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Первая запись',
				'Null'
			)
		),
		'toTable'	=> array (
			'Varchar',
			array (
				'Size'	=> 50,
				'Default'	=> null,
				'Comment'	=> 'Вторая таблица',
				'Null'
			)
		),
		'toRowId'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Вторая запись',
				'Null'
			)
		)
	)
	);
