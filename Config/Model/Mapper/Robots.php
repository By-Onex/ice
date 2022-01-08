<?php

return array(
	'admin' => array(
        'links' => array(
        	'id',
        	'name'
    	),
        'rowPlugins' => array(
        	'General' => array(
        		'Admin_Plugin_Robot' => array(
        			'toModel' => 'City',
        			'title' => 'Связь роботса с городами:',
        			'tpl' => 'index'
    			)
    		)
    	)
    ),
    'comment' => 'Таблица для хранения robots.txt',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 10,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'название роботса для показа в плагине роботса в админке модели города'    
            )    
        ),
        'priority' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'приоритет действия именно данной записи'    
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 4,    
                'Default' => 0,    
                'Comment' => 'активен ли данный роботс, по умолчанию - 0'    
            )    
        ),
        'content' => array(
            'Text',
            array(
                'Comment' => 'содержимое файла robots.txt по соответствующему городу'    
            )    
        ),
        'showHost' => array(
            'Tinyint',
            array(
                'Size' => 4,    
                'Comment' => 'подставлять ли адрес текущего домена последней строкой в виде Host: nsk.32top.ru'    
            )    
        ),
        'showSitemap' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Подставлять ли ссылку на sitemap?',    
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