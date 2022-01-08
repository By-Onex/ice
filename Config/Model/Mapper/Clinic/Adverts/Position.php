<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null'
            )    
        ),
        'position' => array(
            'Text',
            array(
                'Not_Null'
            )    
        ),
        'name' => array(
            'Text',
            array(
                'Not_Null'
            )
        )
    )    
    
);