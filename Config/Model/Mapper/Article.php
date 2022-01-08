<?php

return array(
	'admin' => array(
        'fields' => array(
        	'id',
        	'category',
        	'name',
        	'City__id'
    	),
        'includes' => array(
        	'City__id' => 'City'
    	),
        'links' => array(
        	'id',
        	'name'
    	),
        'limitators' => array(
        	'category',
        	'City__id'
    	),
        'filters' => array(
        	'City__id' => 'City::id || 0'
    	)
    ),
    'comment' => 'Статьи',
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
        'category' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Not_Null'
            )    
        ),
        'Illness__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0    
            )    
        ),
        'date' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Default' => '',    
                'Not_Null'
            )    
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Сортировка',    
                'Not_Null'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Default' => '',    
                'Not_Null'
            )    
        ),
        'description' => array(
            'Text',
            array(
                'Comment' => 'Короткое описание статьи на странице статей',    
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
        'links' => array(
            'Text',
            array(
                'Comment' => 'Сериализованный массив ссылок на похожие статьи',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Text',
            array(
                'Not_Null'
            )    
        ),
        'name_page' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Default' => '',    
                'Not_Null'
            )    
        ),
        'dont_show_any_ads' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'Отключить показ рекламы внутри статьи',    
                'Not_Null'
            )    
        ),
        'contains_video' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'есть ли видео',    
                'Not_Null'
            )    
        ),
        'contains_icon' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'Имеет ли свою иконку',    
                'Not_Null'
            )    
        ),
        'is_paid' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'праплачена ли',    
                'Not_Null'
            )    
        ),
        'is_inno' => array(
            'Tinyint',
            array(
                'Size' => 4,    
                'Default' => 0,    
                'Comment' => 'Инновационно?',    
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
        'searchFormCaption' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Заголовок краткой формы поиска',    
                'Not_Null'
            )    
        ),
        'rating' => array(
            'Double',
            array(
                'Not_Null'
            )    
        ),
        'comment_votes' => array(
            'Int',
            array(
                'Size' => 10,    
                'Not_Null'
            )    
        ),
        'comment_positive' => array(
            'Int',
            array(
                'Size' => 10,    
                'Not_Null'
            )    
        ),
        'comment_count' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Not_Null'
            )    
        ),
        'hide_negative_comments' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Активна',    
                'Not_Null'
            )    
        ),
        'last_comment_time' => array(
            'Datetime',
            array(
                'Comment' => 'Время последнего коммента',    
                'Not_Null'
            )    
        ),
        'numberShowImages' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 3,    
                'Comment' => 'Колличество показываемых картинок о_О',    
                'Not_Null'
            )    
        ),
    ),    
    'indexes' => array(
        'id' => array(
            'Primary',
            array(
                'id'        
            )        
        ),        
        'name' => array(
            'Key',
            array(
                'name'        
            )        
        ),        
        'description' => array(
            'Key',
            array(
                'description'        
            )        
        ),        
        'keywords' => array(
            'Key',
            array(
                'keywords'        
            )        
        )        
    )
);