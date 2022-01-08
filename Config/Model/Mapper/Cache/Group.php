<?php

return array(
    'admin' => array(
    ),
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size'  => 11,
                'Not_Null',
                'Auto_Increment'
            )
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 64,
                'Not_Null'
            )
        ),
        'sort' => array(
            'Smallint',
            array(
                'Size'    => 6,
                'Not_Null',
            )
        )
    ),
    'indexes' => array(
        'id' => array(
            'Primary',
            array('id')
        )
    )
);
