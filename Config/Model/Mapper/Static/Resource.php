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

	'comment'		=> 'Упаковщики статичных ресурсов',
	'author'		=> 'morph',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null',
				'Comment'	=> 'id',
				'Auto_Increment'
			)
		),
		'name'	=> array(
			'Varchar',
			array(
				'Size'	=> 64,
				'Comment'	=> 'Название',
				'Not_Null'
			)
		),
		'sort'	=> array(
			'Int',
			array(
				'Size'	=> 11,
				'Comment'	=> 'Сортировка',
				'Not_Null'
			)
		),
		'active'	=> array(
			'Tinyint',
			array(
				'Size'	=> 1,
				'Comment'	=> 'Активность',
				'Not_Null'
			)
		)
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		),
		'mainIndex'	=> array(
			'Key',
			array('active', 'sort')
		)

	)

);
