<?php

return array(
	'admin' => array(
        'fields' => array(
        	'id',
        	'City__id',
        	'discount',
        	'discountTitle',
        	'price',
        	'priceShare',
        	'title',
        	'active',
            'ImageInHome'
    	),
        'afterSave' => array(
        	'Discount/afterSave'
    	),
        'rowPlugins' => array(
        	'Top' => array(
        		'Admin_Plugin_Discount_Clinic' => array(
        			'title' => 'Привязанные клиники',
        			'tpl' => 'clinicList'
    			)
    		),
        	'General' => array(
        		'Admin_Plugin_Discount_Coupon' => array(
        			'title' => 'Купон'
    			)
    		)
    	),
        'filters' => array(
        	'City__id' => 'City::id',
        	'isSuspended' => null

    	),
        'limit' => '30'
    ),
    'comment' => 'Скидки фирм',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'discount' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Размер скидки',    
                'Not_Null'
            )    
        ),
        'finishDate' => array(
            'Date',
            array(
                'Comment' => 'Дата окончания акции (если акция бессрочная, оставлять 0000-00-00)',    
                'Not_Null'
            )    
        ),
        'isModerated' => array(
            'Tinyint',
            array(
                'Size' => 1,
                'Default' => 1,
                'Comment' => 'Промодерировано',
                'Not_Null'
            )    
        ),
        'isUnlimited' => array(
            'Tinyint',
            array(
                'Size' => 1,
                'Comment' => 'Является бессрочной?',
                'Not_Null'
            )
        ),
        'priority' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Приоритет купона в списке',    
                'Not_Null'
            )    
        ),
        'inRightColumn' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Показывать в правой колонке?',    
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
        'price' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Цена обычная',    
                'Not_Null'
            )    
        ),
        'priceShare' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Цена по акции',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Заголовок акции',    
                'Not_Null'
            )    
        ),
        'shortDesc' => array(
            'Text',
            array(
                'Comment' => 'Краткое описание',    
                'Not_Null'
            )    
        ),
        'createdAt' => array(
            'Date',
            array(
                'Comment' => 'Дата создания',    
                'Not_Null'
            )    
        ),
        'updatedAt' => array(
            'Date',
            array(
                'Comment' => 'Дата редактирования',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Text',
            array(
                'Comment' => 'Текст статьи',    
                'Not_Null'
            )    
        ),
        'Service__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Услуга',    
                'Not_Null'
            )    
        ),
        'imageCover300Url' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Превьюшка картинки 300 на 300',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Активна',    
                'Not_Null'
            )    
        ),
        'isSuspended' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Удалена?',    
                'Not_Null'
            )    
        ),
        'Discount_Type__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Тип акции или скидки',    
                'Not_Null'
            )    
        ),
        'showCoupon' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Показывать купон для печати?',    
                'Not_Null'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id юзера',    
                'Not_Null'
            )    
        ),
        'imageCoverOriginalUrl' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Оригинальная картинка',    
                'Not_Null'
            )    
        ),
        'showSimilarDiscount' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Показывать похожие акции?',    
                'Not_Null'
            )    
        ),
        'ImageInHome' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'путь к изображению, на главной странице',    
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