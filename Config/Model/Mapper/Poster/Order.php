<?php

return array (
        'admin' => array(
            'afterSave' => array(
                'Poster_Order::sendEmail'
            ),
            'rowPlugins' => array(
                    'Top' => array(
                        'Admin_Plugin_Poster_Order' => array(
                            'title' => 'Плакаты для заказа',
                            'tpl' => 'postersForOrder'
                        ),
                    ),
                ),
        ),
	'comment' => 'Заказы плакатов',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Null',
				'Auto_Increment'
			)
		),
		'fio'	=> array (
			'Varchar',

			array (
				'Size'	=> 256,
				'Default'	=> null,
				'Comment'	=> 'ФИО',
				'Null'
			)
		),
		'phone'	=> array (
			'Varchar',

			array (
				'Size'	=> 50,
				'Default'	=> null,
				'Comment'	=> 'Телефон',
				'Null'
			)
		),
		'city'	=> array (
			'Varchar',

			array (
				'Size'	=> 32,
				'Default'	=> null,
				'Comment'	=> 'Название города',
				'Null'
			)
		),
		'postcode'	=> array (
			'Varchar',

			array (
				'Size'	=> 32,
				'Default'	=> null,
				'Comment'	=> 'Почтовый индекс',
				'Null'
			)
		),
		'adress'	=> array (
			'Text',

			array (
				'Comment'	=> 'Адрес',
				'Null'
			)
		),
		'comment'	=> array (
			'Text',

			array (
				'Comment'	=> 'Комментарий к заказу',
				'Null'
			)
		),
		'trackingURL'	=> array (
			'Varchar',

			array (
				'Size'	=> 256,
				'Default'	=> null,
				'Comment'	=> 'URL страницы отслеживания заказа',
				'Null'
			)
		),
		'trackingNum'	=> array (
			'Int',

			array (
				'Size'	=> 50,
				'Comment'	=> 'Идентификатор почтового отправления',
				'Null'
			)
		),
		'Poster_Order_Status__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Comment'	=> 'ID статуса заказа',
				'Null'
			)
		),
        'User__id'	=> array (
            'Int',
            array (
                'Size'	=> 11,
                'Comment'	=> 'id пользователя',
                'Default'	=> 0,
                'Null'
            )
        ),
        'create_date' => array (
            'Datetime',

            array (
                'Comment'	=> 'Дата и время создания',
                'Null'
            )
        ),
        'update_date' => array (
            'Datetime',

            array (
                'Comment'	=> 'Дата и время обновления',
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
