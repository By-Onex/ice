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

	'comment'		=> 'Рейтинг',
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
                'Size'  => 64,
                'Not_Null'
            )
        ),
        'votes' => array(
            'Int',
            array(
                'Size'  => 11,
                'Not_Null'
            )
        ),
        'value' => array(
            'Int',
            array(
                'Size'  => 11,
                'Not_Null'
            )
        ),
        'result' => array(
            'Decimal',
            array(
                'Size'  => array(2,1),
                'Not_Null'
            )
        )
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		),
        'mainIndex' => array(
            'Key',
            array('table', 'rowId')
        )
	)
);
