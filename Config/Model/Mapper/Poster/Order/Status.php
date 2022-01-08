<?php

return array (
        'admin' => array(),
	'comment' => 'Статусы заказов',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Null',
                'Auto_Increment'
			)
		),
		'step'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Comment'	=> 'номер шага',
				'Null'
			)
		),
		'name'	=> array (
			'Varchar',

			array (
				'Size'	=> 50,
				'Default'	=> null,
				'Comment'	=> 'название статуса',
				'Null'
			)
		),
		'desc'	=> array (
			'Text',

			array (
				'Comment'	=> 'описание статуса',
				'Null'
			)
		),
        'Mail_Template__id'	=> array (
            'Int',

            array (
                'Size'	=> 11,
                'Comment'	=> 'ID шаблона емайл сообщения',
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
