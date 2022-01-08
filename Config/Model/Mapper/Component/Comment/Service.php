<?php

return array (
    
    
    
	'comment'		=> 'Связь комментариев и сервисов',
	'author'		=> 'markov',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null'
			)
		),
		'Component_Comment__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null'
			)
		),
		'Service__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null'
			)
		)
	),
	'indexes'		=> array (
		'id'	=> array (
			'Primary',
			array ('id')
		),
		'Component_Comment__id'	=> array (
			'Key',
			array ('Component_Comment__id')
		),
		'Service__id'	=> array (
			'Key',
			array ('Service__id')
		)
		
	)
	
);
