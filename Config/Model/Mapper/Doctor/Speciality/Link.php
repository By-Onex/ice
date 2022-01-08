<?php

return array(
    'comment' => 'Связь доктора и специализации',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'Doctor__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id доктора',    
                'Not_Null'
            )    
        ),
        'Doctor_Speciality__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'id специализации доктора',    
                'Not_Null'
            )    
        ),
        'position' => array(
            'Int',
            array(
                'Size' => 11,    
                'Default' => 0,    
                'Comment' => 'Позиция в поднятии'    
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
        'idcl_Doctor__id' => array(
            'Key',
            array(
                'Doctor__id'        
            )        
        ),        
        'idcl_Doctor_Speciality__id' => array(
            'Key',
            array(
                'Doctor_Speciality__id'        
            )        
        )        
    )
);