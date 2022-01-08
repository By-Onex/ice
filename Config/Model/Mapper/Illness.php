<?php

return array(
    'comment' => 'Болезни',
    'fields' => array(
        'rTitle' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'Название болезни в родительном падеже',    
                'Not_Null'
            )    
        ),
        'vTitle' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Not_Null'
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Активно',    
                'Not_Null'
            )    
        ),
        'page_url' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'url',    
                'Not_Null'
            )    
        ),
        'page_title' => array(
            'Text',
            array(
                'Comment' => 'Title страницы',    
                'Not_Null'
            )    
        ),
        'page_h1' => array(
            'Text',
            array(
                'Comment' => 'Заголовок H1',    
                'Not_Null'
            )    
        ),
        'text' => array(
            'Text',
            array(
                'Comment' => 'Статья про болезнь',    
                'Not_Null'
            )    
        ),
        'description' => array(
            'Text',
            array(
                'Comment' => 'Краткое описание болезни',    
                'Not_Null'
            )    
        ),
        'title' => array(
            'Text',
            array(
                'Comment' => 'Название болезни',    
                'Not_Null'
            )    
        ),
        'href' => array(
            'Text',
            array(
                'Comment' => 'Ссылка на статью про болезнь (из старой таблицы статей)',    
                'Not_Null'
            )    
        ),
        'link' => array(
            'Text',
            array(
                'Comment' => 'Название стиля CSS для отображения болезни в списке',    
                'Not_Null'
            )    
        ),
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Первичный ключ',    
                'Not_Null',
                'Auto_Increment'
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