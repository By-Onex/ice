<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id',    
                'Not_Null'
            )    
        ),
        'Discount__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Акция',    
                'Not_Null'
            )    
        ),
        'Component_Image__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Изображение',    
                'Not_Null'
            )    
        ),
        'isMain' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Является ли основным изображением слайдера',    
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