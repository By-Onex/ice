<?php

return array (
	'admin' => array(
		'fields' => array(
			'id', 'Illness__id', 'parentId', 'name', 'href', 'pic', 'description', 'css_class', 'sort'
		),
		
		'limit' => 30,
		
		'includes' => array(
			'Illness__id' => 'Illness',
			'parentId'    => 'Illness_Cure'
		),
		
		'limitators' => array(
			'Illness__id', 'parentId'
		),
	),
	'comment'		=> 'Варианты лечения',
	'author'		=> 'denis.d',
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'ID',
				'Null',
				'Auto_Increment'
			)
		),
		'Illness__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Болезнь',
				'Null'
			)
		),
		'parentId'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Родительский элемент',
				'Null'
			)
		),
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Название',
				'Null'
			)
		),
		'href'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Ссылка',
				'Null'
			)
		),
		'pic'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'Картинка',
				'Null'
			)
		),
		'description'	=> array (
			'Text',
			array (
				'Comment'	=> 'Описание',
				'Null'
			)
		),
		'css_class'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> null,
				'Comment'	=> 'CSS класс',
				'Null'
			)
		),
		'sort'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Comment'	=> 'Порядок сортировки',
				'Null'
			)
		)
	)
	);
