<?php

return array(
	'admin' => array(
        'filters' => array(
        	'City__id' => 'City::id'
    	)
    ),
    'comment' => 'Линии метро',
    'author' => 'denis.d',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'spb_id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'имя линии',    
                'Not_Null'
            )    
        ),
        'css_class' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'класс линии метро',    
                'Not_Null'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Город',    
                'Not_Null'
            )    
        )
    ),    
    'indexes' => array(
        'id' => array(
            'Primary',
            array(
                'id'        
            )        
        )        
    )
);