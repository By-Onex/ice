<?php

return array(
	'admin' => array(
        'afterSave' => array(
        	'userFunc' => null

    	),
        'afterDelete' => array(
        	'Content/afterDelete'
    	),
        'rowPlugins' => array(
        	'General' => null

    	),
        'fields' => array(
        	'id',
        	'title',
        	'name',
        	'short',
        	'createdAt'
    	),
        'links' => array(
        	'id'
    	),
        'searchFieldAddict' => array(
        	'url'
    	)
    ),
	'signals' => array(
        'onCreate' => array(
        	'updateContent'
    	),
        'afterDelete' => 'updateContent',
        'updateContent' => 'updateContent'
    ),
    'comment' => 'Базовый контент',
    'author' => 'neon',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment',
                'Unsigned'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Название'    
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Default' => 'Simple',    
                'Comment' => 'Класс объекта'    
            )    
        ),
        'short' => array(
            'Text',
            array(
                'Comment' => 'Краткое описание'    
            )    
        ),
        'text' => array(
            'Longtext',
            array(
                'Comment' => 'Полное описание'    
            )    
        ),
        'Content_Category__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Категория контента'    
            )    
        ),
        'createdAt' => array(
            'Datetime',
            array(
                'Default' => '2000-01-01 00:00:00',    
                'Comment' => 'Дата создания'    
            )    
        ),
        'updatedAt' => array(
            'Datetime',
            array(
                'Default' => '2000-01-01 00:00:00',    
                'Comment' => 'Дата изменения'    
            )    
        ),
        'imageUrl' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Иконка'    
            )    
        ),
        'cover100Url' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Превьюшка 100 на 100'    
            )    
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'URL'    
            )    
        ),
        'active' => array(
            'Int',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Активно',    
                'Unsigned'
            )    
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Сортировка'    
            )    
        ),
        'rating' => array(
            'Double',
            array(
                'Not_Null'
            )    
        ),
        'rating_place' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'Content_Criteria_Table__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'serviceFirstId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'вес связи(для корректного отображения услуг в page title)',    
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
        'Content_Category__id___active_index_index_index_index' => array(
            'Key',
            array(
                'Content_Category__id'        
            )        
        ),        
        'url_index_index_index_index' => array(
            'Key',
            array(
                'url'        
            )        
        ),        
        'active_index_index_index_index' => array(
            'Key',
            array(
                'active'        
            )        
        ),        
        'Content_Category_id_active_index_index_index_index' => array(
            'Key',
            array(
                'Content_Category__id'        
            )        
        )        
    )
);