<?php

return array(
    'comment' => 'Пригороды',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Имя',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Название',    
                'Not_Null'
            )    
        ),
        'translit' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Транслит названия',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Text',
            array(
                'Not_Null'
            )    
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Ссылка',    
                'Not_Null'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Основной город',    
                'Not_Null'
            )    
        ),
        'uri' => array(
            'Varchar',
            array(
                'Size' => 256    
            )    
        ),
        'NameRodPadezh' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Default' => '',    
                'Comment' => 'наименование в родительном падеже',    
                'Not_Null'
            )    
        ),
        'NamePredlPadezh' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Default' => '',    
                'Comment' => 'наименование в предложном падеже',    
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