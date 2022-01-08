<?php

return array (
			'admin' => array (
			// Сортировки
//			'sort'		=> '',
//
//			'search_fields'	=> array (
//
//			),
//
//			// Выводимые поля
//			'fields'  => array ('id'),
//
//			// Стили
//			'styles'	=> array (
//
//			),
//
//			// Стили ссылок
//			'link_styles' => array (
//
//			),
//
//			// Поля, являющиеся ссылками
//			'links'		=> array (
//
//			),
//
//			// Лимиты
//			'limit'	=> 1000,
//
//			// Эвенты
//			'event' => array (
//
//			),
//
//			// Фильтры
//			'filter'	=> array (
//
//			),
//
//			// Фильтры значений при подстановки
//			'field_filters'	=> array (
//
//			),
//
//			// Плагины
//			'plugin'	=> array (
//
//			),
//
//			// Заголовок
//			'title'	=>  'title',
//
//			// Подстановки
//			'includes'	=> array (
//
//			),
//
//			// Ограничители
//			'limitators'	=> array (
//
//			),
//
//			// Автозаполнители
//			'auto_select'  => array (
//
//			),
//
//			// Модификаторы
//			'modificators' => array (
//
//			),
//
//			'afterSave'	=> array (
//
//			)
		),

	'comment'		=> 'Логи голосования',
	'author'		=> 'morph',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null',
				'Auto_Increment'
			)
		),
        'rowId' => array(
            'Int',
            array(
                'Size'  => 11,
                'Not_Null'
            )
        ),
        'table' => array(
            'Varchar',
            array(
                'Size'  => 62,
                'Not_Null'
            )
        ),
        'User__id'  => array(
            'Int',
            array(
                'Size'  => 11,
                'Not_Null'
            )
        ),
        'phpSessionId'  => array(
            'Varchar',
            array(
                'Size'  => 62,
                'Not_Null'
            )
        ),
        'rating'    => array(
            'Int',
            array(
                'Size'  => 11,
                'Not_Null'
            )
        ),
        'createdAt' => array(
            'Datetime',
            array(
                'Not_Null'
            )
        ),
        'ip'    => array(
            'Varchar',
            array(
                'Size'  => 62,
                'Not_Null'
            )
        )
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		),
        'user'  => array(
            'Key',
            array('table', 'rowId', 'User__id')
        ),
		'session'   => array(
            'Key',
            array('table', 'rowId', 'phpSessionId')
        )
	)

);
