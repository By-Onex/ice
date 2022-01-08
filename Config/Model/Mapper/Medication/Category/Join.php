<?php

return array (
    
    
    
	'comment'		=> 'Связь лекарств и категорий',
	'author'		=> 'markov',
	'fields'		=> array (
		'id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null',
				'Auto_Increment'
			)
		),
		'Medication__id'	=> array (
			'Int',

			array (
				'Size'	=> 11,
				'Not_Null'
			)
		),
		'Medication_Category__id'	=> array (
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
		'Medication__id'	=> array (
			'Key',
			array ('Medication__id')
		),
		'Medication_Category__id'	=> array (
			'Key',
			array ('Medication_Category__id')
		)
		
	)
	
);
