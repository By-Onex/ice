<?php

return array(
	'admin' => array(
        'fields' => array(
        	'id',
        	'City__id',
        	'pattern',
        	'pageTitle',
        	'siteTitle',
        	'seoText'
    	),
        'rowPlugins' => array(
        	'General' => array(
        		'Page_Title/adminHint' => array(
        			'title' => 'Подсказка:'
    			)
    		)
    	),
        'links' => array(
        	'id',
        	'title'
    	),
        'includes' => array(
        	'City__id' => 'City'
    	),
        'limitators' => array(
        	'City__id'
    	),
        'limit' => '30',
        'filters' => null

    ),
    'comment' => 'Title страниц',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id',    
                'Not_Null'
            )    
        ),
        'host' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Хост',    
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
        ),
        'pattern' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Шаблон страницы',    
                'Not_Null'
            )    
        ),
        'parentId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'siteTitle' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Заголовок страницы',    
                'Not_Null'
            )    
        ),
        'pageTitle' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Заголовок h1 на странице',    
                'Not_Null'
            )    
        ),
        'pageDescription' => array(
            'Text',
            array(
                'Comment' => 'Описание страницы (после заголовка h1)',    
                'Not_Null'
            )    
        ),
        'seoText' => array(
            'Text',
            array(
                'Comment' => 'Сео-текст внизу страницы',    
                'Not_Null'
            )    
        ),
        'keywords' => array(
            'Text',
            array(
                'Comment' => 'Ключевые слова',    
                'Not_Null'
            )    
        ),
        'metaDescription' => array(
            'Text',
            array(
                'Comment' => 'Мета-описание страницы',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 4,    
                'Not_Null'
            )    
        ),
        'weight' => array(
            'Int',
            array(
                'Size' => 10,    
                'Comment' => 'Вес записи',    
                'Not_Null'
            )    
        ),
        'action' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'список запускаемых контроллеров',    
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
        ),        
        'parentId' => array(
            'Key',
            array(
                'parentId'        
            )        
        )        
    )
);