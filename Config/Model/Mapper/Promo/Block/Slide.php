<?php

return array(
	'admin' => array(
        'fields' => array(
        	'id',
        	'header',
        	'text',
        	'url',
        	'City__id',
        	'priority',
        	'active'
    	),
        'rowPlugins' => array(
        	'Top' => array(
        		'Admin_Plugin_Promo_Block_Slide/index' => array(
        			'title' => 'Заголовок'
    			)
    		)
    	)
    ),
    'comment' => 'Слайды промо блока',
    'fields' => array(
        'targetBlank' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Добавить target=_blank',    
                'Not_Null'
            )    
        ),
        'showText' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Показывать краткий текст',    
                'Not_Null'
            )    
        ),
        'showHeader' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Показывать заголовок промо блока',    
                'Not_Null'
            )    
        ),
        'priority' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Приоритет показа'    
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Город на котором отображается слайд. 0 - на всех'    
            )    
        ),
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'header' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'Заголовок промо блока'    
            )    
        ),
        'text' => array(
            'Varchar',
            array(
                'Size' => 512,    
                'Comment' => 'Краткий текст промо блока'    
            )    
        ),
        'image' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'Путь к фоновому изображению'    
            )    
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 256,    
                'Comment' => 'url ссылки на которую совершается переход'    
            )    
        ),
        'html' => array(
            'Text',
            array(
                'Comment' => 'HTML блока'    
            )    
        ),
        'finishDate' => array(
            'Datetime',
            array(
                'Comment' => 'Временя снятия с размещения'    
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Активность показа'    
            )    
        )
    ),    
    'indexes' => array(
        'priority' => array(
            'Key',
            array(
                'priority'        
            )        
        ),        
        'City__id' => array(
            'Key',
            array(
                'City__id'        
            )        
        ),        
        'id' => array(
            'Primary',
            array(
                'id'        
            )        
        )        
    )
);