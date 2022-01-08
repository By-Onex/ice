<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id',    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'showDate' => array(
            'Date',
            array(
                'Comment' => 'Дата создания'    
            )    
        ),
        'Banner__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id баннера',    
                'Not_Null'
            )    
        ),
        'showCount' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'колличество показов',    
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