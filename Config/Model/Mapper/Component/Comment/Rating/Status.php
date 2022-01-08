<?php

return array(
    'comment' => 'Статусы отзыва',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Varchar',
            array(
                'Size' => 500,    
                'Not_Null'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Not_Null'
            )   
        ),
        'active' => array(
        	'Tinyint',
        	array(
        		'Size' => '1',
        		'Default' => '1',
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