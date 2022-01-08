<?php

return array(
    'admin' => array(
    ),
    'comment' => 'Счётчики на городах',
    'author'  => 'neon',
    'fields'  => array(
        'id'       => array(
            'Int',
            array(
                'Size' => 10,
                'Not_Null'
            )
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 10,
                'Not_Null'
            )
        ),
        'html'     => array(
            'Text',
            array(
                'Not_Null'
            )
        )
    ),
    'indexes' => array(
        'id'       => array(
            'Primary',
            array(
                'id')
        ),
        'City__id' => array(
            'Key',
            array(
                'City__id')
        )
    )
);
