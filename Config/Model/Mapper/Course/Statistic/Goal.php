<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Not_Null'
            )
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 64,
                'Comment' => 'Название',
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