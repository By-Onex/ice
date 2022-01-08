<?php

return array (
    
        
    
	        'comment'		=> 'Восстановление пароля',
	            'author'		=> 'denis.d',
	                'fields'            => array(
        'id' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Comment' => 'id',
        		'Not_Null',
        		'Auto_Increment'
    		)
    	),
        'User__id' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Comment' => 'Пользователь',
        		'Not_Null'
    		)
    	),
        'email' => array(
        	'Text',
        	array(
        		'Comment' => 'емейл пользователя'
    		)
    	),
        'queryTime' => array(
        	'Datetime',
        	array(
        		'Default' => '2000-01-01 00:00:00',
        		'Comment' => 'Время запроса',
        		'Not_Null'
    		)
    	),
        'acceptTime' => array(
        	'Datetime',
        	array(
        		'Default' => '2000-01-01 00:00:00',
        		'Comment' => 'Время подтверждения',
        		'Not_Null'
    		)
    	),
        'ip' => array(
        	'Varchar',
        	array(
        		'Size' => '50',
        		'Comment' => 'ip с которого пришел запрос'
    		)
    	),
        'code' => array(
        	'Varchar',
        	array(
        		'Size' => '100',
        		'Comment' => 'Код'
    		)
    	),
        'active' => array(
        	'Tinyint',
        	array(
        		'Size' => '1',
        		'Default' => '1',
        		'Comment' => 'Активно',
        		'Not_Null'
    		)
    	),
        'day' => array(
        	'Int',
        	array(
        		'Size' => '11',
        		'Default' => 0
,
        		'Comment' => 'День от начала эры',
        		'Not_Null'
    		)
    	)
    ),	                'indexes'		=> array(
        'id' => array(
        	'Primary',
        	array(
        		'id'
    		)
    	)
    )        );
