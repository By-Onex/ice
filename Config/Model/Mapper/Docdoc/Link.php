<?php

return array(
    'comment' => 'Связь с сущностями docdoc',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'model' => array(
            'Varchar',
            array(
                'Size' => 45,    
                'Comment' => 'Название модели',    
                'Not_Null'
            )    
        ),
        'rowId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id модели у нас',    
                'Not_Null'
            )    
        ),
        'foreignId' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id модели у docdoc',    
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
        'idl_modelRowId' => array(
            'Key',
            array(
                'model'        
            )        
        ),        
        'idl_modelForeignId' => array(
            'Key',
            array(
                'model'        
            )        
        )        
    )
);