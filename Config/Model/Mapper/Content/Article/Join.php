<?php

return array (
    
    
    
	'author'		=> 'markov',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null'
			)
		),
		'Content__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null'
			)
		),
		'joinContentId'	=> array (
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
		'Content__id'	=> array (
			'Key',
			array ('Content__id')
		),
		'joinContentId'	=> array (
			'Key',
			array ('joinContentId')
		)
		
	)
	
);
