<?php

return array(
    'admin' => array(
		'fields' => array(
			'id', 'a_text', 'Diagnost_Question__id'
		),
		
		'links' => array(
			'id'
		),

                'rowPlugins' => array(
                    'Top' => array(
                        'Admin_Plugin_Diagnost_Answer' => array(
                            'title' => 'Привязанные услуги',
                            'tpl' => 'serviceList'
                        ),
                    ),
                ),
	),
    'comment' => 'Диагност. Ответы',
    'author' => 'denis.d',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Первичный ключ',
                'Null',
                'Auto_Increment'
            )
        ),
        'a_text' => array(
            'Text',
            array(
                'Comment' => 'Текст ответа',
                'Null'
            )
        ),
        'Diagnost_Question__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Default' => 0,
                'Comment' => 'ID вопроса, на который отвечаем',
                'Null'
            )
        ),
        'title'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Заголовок ответа',
				'Null'
			)
		),
    )
);
