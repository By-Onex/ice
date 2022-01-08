<?php

return array(
    'comment' => 'Контактные данные по вопросам рекламы',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'type' => array(
            'Varchar',
            array(
                'Size' => 255    
            )    
        ),
        'value' => array(
            'Varchar',
            array(
                'Size' => 255    
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11    
            )    
        ),
        'sort' => array(
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
        ),        
        'City__id' => array(
            'Key',
            array(
                'City__id'        
            )        
        ),        
        'sort' => array(
            'Key',
            array(
                'sort'        
            )        
        )        
    )
);