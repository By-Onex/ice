<?php

return array(
	'admin' => array(
        'rowPlugins' => array(
        	'General' => array(
        		'Admin_Plugin_Content_Article_Doctor' => array(
        			'title' => 'Связь с докторами:',
        			'tpl' => 'index'
    			)
    		)
    	)
    ),
    'author' => 'markov',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 255    
            )    
        ),
        'pageTitle' => array(
            'Varchar',
            array(
                'Size' => 255    
            )    
        ),
        'siteTitle' => array(
            'Varchar',
            array(
                'Size' => 255    
            )    
        ),
        'keywords' => array(
            'Varchar',
            array(
                'Size' => 1024,    
                'Not_Null'
            )    
        ),
        'minPriceTitle' => array(
            'Varchar',
            array(
                'Size' => 512,    
                'Comment' => 'Заголовок таблицы минимальных цен',    
                'Not_Null'
            )    
        ),
        'titleJson' => array(
            'Text',
            array(
                'Comment' => 'JSON-кэш всех тайтлов статьи',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Longtext',
            array(
                'Comment' => 'Текст статьи',    
                'Not_Null'
            )    
        ),
        'linkedArticleJson' => array(
            'Text',
            array(
                'Comment' => 'Похожие статьи'    
            )    
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 11    
            )    
        ),
        'sortByVideo' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Приоритет по видео',    
                'Not_Null'
            )    
        ),
        'contentCategoryId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Категория контента для меню'    
            )    
        ),
        'isPaid' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'Платное?',    
                'Not_Null'
            )    
        ),
        'isInnovation' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'Инновационно?',    
                'Not_Null'
            )    
        ),
        'showAnyAds' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Показать рекламу внутри статьи?',    
                'Not_Null'
            )    
        ),
        'showClinicSnippet' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'Показывать сниппет клиники на старинце статьи',    
                'Not_Null'
            )    
        ),
        'Clinic__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Клиника-владелец сниппета'    
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Город'    
            )    
        ),
        'hasVideo' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'есть ли видео?',    
                'Not_Null'
            )    
        ),
        'isDoctorOpinion' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'мнение врача'    
            )    
        ),
        'isTerm' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'термин?'    
            )    
        ),
        'isArticleAboutEquipment' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'Статья об оборудовании?'    
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