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




	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null',
				'Auto_Increment'
			)
		),
        'Cache_Group__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null',
			)
		),
        'title'    => array(
            'Varchar',
            array(
                'Size'  => 64,
                'Not_Null'
            )
        ),
        'controllerName'    => array(
            'Varchar',
            array(
                'Size'  => 64,
                'Not_Null'
            )
        ),
        'actionName'    => array(
            'Varchar',
            array(
                'Size'  => 64,
                'Not_Null'
            )
        ),
        'handlerName'    => array(
            'Varchar',
            array(
                'Size'  => 64,
                'Not_Null'
            )
        )
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		)

	)
);