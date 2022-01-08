<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'phone' => array(
            'Text'    
        ),
        'email' => array(
            'Text'    
        ),
        'skype' => array(
            'Text'    
        ),
        'widgetId' => array(
            'Int',
            array(
                'Size' => 11    
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