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
        'table' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'Название основной модели',    
                'Not_Null'
            )    
        ),
        'rowId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Ид основной модели',    
                'Not_Null'
            )    
        ),
        'modelName' => array(
            'Varchar',
            array(
                'Size' => 128,    
                'Comment' => 'Модель, которая правится',    
                'Not_Null'
            )    
        ),
        'modelId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Ид модели, которая правится',    
                'Not_Null'
            )    
        ),
        'queryType' => array(
            'Varchar',
            array(
                'Size' => 32,    
                'Comment' => 'Тип запроса',    
                'Not_Null'
            )    
        ),
        'createdAt' => array(
            'Datetime',
            array(
                'Comment' => 'Дата',    
                'Not_Null'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Пользователь',    
                'Not_Null'
            )    
        ),
        'author' => array(
            'Varchar',
            array(
                'Size' => 200,    
                'Comment' => 'Автор правки',    
                'Not_Null'
            )    
        ),
        'authorParamsJson' => array(
            'Text',
            array(
                'Comment' => 'Параметры автора правки',    
                'Not_Null'
            )    
        ),
        'isAccepted' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 0,    
                'Comment' => 'Применено ли',    
                'Not_Null'
            )    
        ),
        'acceptedBy' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Пользователь который применил',    
                'Not_Null'
            )    
        ),
        'acceptedAt' => array(
            'Datetime',
            array(
                'Comment' => 'Дата применения правки',    
                'Not_Null'
            )    
        ),
        'paramsJson' => array(
            'Text',
            array(
                'Comment' => 'Данные элемента модерации',    
                'Not_Null'
            )    
        ),
        'hash' => array(
            'Varchar',
            array(
                'Size' => 65,    
                'Comment' => 'Хеш',    
                'Not_Null'
            )    
        ),
        'joinHash' => array(
            'Varchar',
            array(
                'Size' => 65,    
                'Comment' => 'Хеш связанных единиц',    
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