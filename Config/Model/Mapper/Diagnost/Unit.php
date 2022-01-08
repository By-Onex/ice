<?php

return array(
    'fields' => array(
        'level' => array(
            'Smallint',
            array(
                'Size' => 6,    
                'Comment' => 'Уроверь вложенности',    
                'Not_Null'
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
        'title' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'Название',    
                'Not_Null'
            )    
        ),
        'answerTitle' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'Заголовок ответа',    
                'Not_Null'
            )    
        ),
        'parentId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Категория диагноста',    
                'Not_Null'
            )    
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Порядок следования',    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Активность',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Text',
            array(
                'Comment' => 'Описание проблемы',    
                'Not_Null'
            )    
        ),
        'isDiagnosis' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Диагноз',    
                'Not_Null'
            )    
        ),
        'linksJson' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'Ссылки на услуги в json',    
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
        'mainIndex_index' => array(
            'Key',
            array(
                'active'        
            )        
        )        
    )
);