<?php

return array(
	'admin' => array(
        'fields' => array(
            'id', 'login', 'name', 'phone', 'email'
    	),

        'links' => array(
            'id', 'login', 'name', 'phone', 'email'
    	),
        'title' => array(
        	'name' => 'Имя',
        	'login' => 'Логин',
        	'phone' => 'Телефон',
        	'email' => 'email'
    	)
    ),
    'title_fields' => array(
        'name', 'login', 'phone', 'email'
    ),
    'comment' => 'Пользователи',
    'author' => 'denis.d',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id',    
                'Null',
                'Auto_Increment'
            )    
        ),
        'spb_id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Null'
            )    
        ),
        'is_deleted' => array(
            'Int',
            array(
                'Size' => 11,
                'Null'
            )
        ),
        'login' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Default' => null,
                'Comment' => 'Логин',
                'Null'
            )
        ),
        'password' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Default' => null,
                'Comment' => 'Пароль',
                'Null'
            )
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Default' => null,
                'Comment' => 'Имя',
                'Null'
            )
        ),
        'active' => array(
            'Int',
            array(
                'Size' => 1,
                'Default' => 1,
                'Comment' => 'Активен',
                'Null'
            )
        ),
        'email' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Default' => null,
                'Comment' => 'E-mail',
                'Null'
            )
        ),
        'phone' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Default' => null,
                'Comment' => 'Телефон',
                'Null'
            )
        ),
        'ip' => array(
            'Varchar',
            array(
                'Size' => 50,
                'Default' => null,
                'Comment' => 'ip',
                'Null'
            )
        ),

        'City__id' => array(
            'Int',
            array(
                'Size' => 10,
                'Default' => null,
                'Null'
            )
        ),
        'isForumConsultant' => array(
            'Tinyint',
            array(
                'Size' => 4,
                'Default' => 0,
                'Comment' => 'Является ли консультантом на форуме',
                'Not_Null'
            )
        )
    )
);
