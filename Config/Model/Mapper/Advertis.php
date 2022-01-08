<?php

return array(
    'comment' => 'Для рекламодателей (по городам)',
    'author' => 'markov',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Auto_Increment'
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Город'    
            )    
        ),
        'html' => array(
            'Text',
            array(
                'Comment' => 'текст'    
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
        )        
    )
);