<?php

return array (
    
    
    
	'comment'		=> 'Рубрики контента',
	'author'		=> 'neon',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Comment'	=> 'id',
				'Not_Null',
				'Auto_Increment'
			)
		),
		'name'	=> array (
			'Varchar',

			array (
				'Size'	=> 100,
				'Comment'	=> 'Внутреннее имя',
				'Not_Null'
			)
		),
		'title'	=> array (
			'Varchar',

			array (
				'Size'	=> 255,
				'Comment'	=> 'Название',
				'Not_Null'
			)
		),
		'parentId'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Comment'	=> 'Родительский раздел',
				'Not_Null'
			)
		),
		'url'	=> array (
			'Varchar',

			array (
				'Size'	=> 255,
				'Not_Null'
			)
		),
		'class'	=> array (
			'Varchar',

			array (
				'Size'	=> 64,
				'Not_Null'
			)
		),
		'active'	=> array (
			'Tinyint',

			array (
				'Size'	=> 1,
				'Default'	=> 1,
				'Not_Null'
			)
		),
		'sort'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null'
			)
		),
		'extending'	=> array (
			'Varchar',

			array (
				'Size'	=> 64,
				'Comment'	=> 'Модель расширения',
				'Not_Null'
			)
		),
		'hasContent'	=> array (
			'Tinyint',

			array (
				'Size'	=> 4,
				'Default'	=> 0,
				'Comment'	=> 'Есть ли контент',
				'Not_Null'
			)
		),
		'contentCount'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Количество элементов',
				'Not_Null'
			)
		),
		'activeContentCount'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Количество активных элементов',
				'Not_Null'
			)
		),
		'pageTitle'	=> array (
			'Varchar',

			array (
				'Size'	=> 255,
				'Comment'	=> 'Заголовок страницы',
				'Not_Null'
			)
		),
		'siteTitle'	=> array (
			'Varchar',

			array (
				'Size'	=> 255,
				'Comment'	=> 'Заголовок сайта',
				'Not_Null'
			)
		)
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		),
		'url_index_index'	=> array (
			'Key',
			array ('url')
		),
		'parentId_index_index'	=> array (
			'Key',
			array ('parentId')
		),
		'active_index_index'	=> array (
			'Key',
			array ('active')
		)
		
	)
	
);
