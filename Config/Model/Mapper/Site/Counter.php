<?php

return array (
	'admin' => array(
        'rowPlugins' => array(
            'General' => array(
                'Admin_Plugin_Robot' => array(
                    'toModel' => 'City',
                    'title' => 'Связь счетчика с городами:',
                    'tpl' => 'index'
                )
            ),
        ),
    ),
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 10,
				'Null',
                'Auto_Increment'
			)
		),
		'name'	=> array (
			'Varchar',

			array (
				'Size'	=> 50,
				'Default'	=> null,
				'Comment'	=> 'Название счетчика для показа в плагине счетчика',
				'Not_Null'
			)
		),
		'priority'	=> array (
			'Int',

			array (
				'Size'	=> 10,
				'Comment'	=> 'Приоритет',
				'Not_Null'
			)
		),
		'active'	=> array (
			'Tinyint',

			array (
				'Size'	=> 4,
				'Comment'	=> 'Активность',
				'Not_Null'
			)
		),
		'content'	=> array (
			'Text',

			array (
				'Comment'	=> 'Коды счетчиков по соответствующему городу',
				'Not_Null'
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
