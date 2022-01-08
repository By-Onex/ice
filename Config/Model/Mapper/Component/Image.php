<?php

return array(
	'signals' => array(
        'onCreate' => array(
        	'modelModerate'
    	),
        'beforeDelete' => 'modelModerate',
        'afterDelete' => 'Model_Driver_Back',
        'beforeUpdate' => 'modelModerate',
        'afterUpdate' => 'Model_Driver_Back'
    ),
    'author' => 'denis.d',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Первичный ключ',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'spb_id' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Not_Null'
            )    
        ),
        'table' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Таблица',    
                'Not_Null'
            )    
        ),
        'rowId' => array(
            'Varchar',
            array(
                'Size' => 64,    
                'Default' => 0,    
                'Comment' => 'Запись',    
                'Not_Null'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Название изображения',    
                'Not_Null'
            )    
        ),
        'author' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Кто добавил',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Text',
            array(
                'Comment' => 'Описание',    
                'Not_Null'
            )    
        ),
        'alt' => array(
            'Varchar',
            array(
                'Size' => 100    
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 100    
            )    
        ),
        'largeUrl' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'URL основной копии',    
                'Not_Null'
            )    
        ),
        'smallUrl' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'URL уменьшенной копии',    
                'Not_Null'
            )    
        ),
        'originalUrl' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'URL оригинала',    
                'Not_Null'
            )    
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'Сортировка изображения',    
                'Not_Null'
            )    
        ),
        'largeWidth' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Ширина изображения (точек)',    
                'Not_Null'
            )    
        ),
        'largeHeight' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Высота изображения (точек)',    
                'Not_Null'
            )    
        ),
        'smallWidth' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Ширина малой копии (точек)',    
                'Not_Null'
            )    
        ),
        'smallHeight' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Высота малой копии (точек)',    
                'Not_Null'
            )    
        ),
        'originalWidth' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Ширина оригинала',    
                'Not_Null'
            )    
        ),
        'originalHeight' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Высота оригинала',    
                'Not_Null'
            )    
        ),
        'largeQuality' => array(
            'Tinyint',
            array(
                'Size' => 3,    
                'Default' => 100,    
                'Comment' => 'Качество большой копии (%)',    
                'Not_Null'
            )    
        ),
        'smallQuality' => array(
            'Tinyint',
            array(
                'Size' => 3,    
                'Default' => 100,    
                'Not_Null'
            )    
        ),
        'date' => array(
            'Datetime',
            array(
                'Not_Null'
            )    
        ),
        'galleryID' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Not_Null'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Кто добавил',    
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
        'status' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Not_Null'
            )    
        ),
        'mime_type' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Not_Null'
            )    
        ),
        'iconUrl' => array(
            'Text',
            array(
                'Comment' => 'Url иконки'    
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
        'table_rowId' => array(
            'Key',
            array(
                'table'        
            )        
        )        
    )
);