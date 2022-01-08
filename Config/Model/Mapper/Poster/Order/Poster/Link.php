<?php

return array (
        'admin' => array(),
	'comment' => 'Связь плакатов и заказов',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Null',
                'Auto_Increment'
			)
		),
		'Poster__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Comment'	=> 'id плаката',
				'Null'
			)
		),
		'Poster_Order__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Comment'	=> 'id заказа плаката',
				'Null'
			)
		),
        'number'	=> array (
            'Int',

            array (
                'Size'	=> 11,
                'Comment'	=> 'Количество экземпляров плаката',
                'Null'
            )
        ),
        'comment'	=> array (
            'Text',

            array (
                'Comment'	=> 'Комментарий к данному плакату',
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
