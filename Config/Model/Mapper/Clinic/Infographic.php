<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'id',
                'Not_Null'
            )
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 256,
                'Comment' => 'Название инфографики',
                'Not_Null'
            )
        ),
        'strategyName' => array(
            'Varchar',
            array(
                'Size' => 256,
                'Comment' => 'Имя стратегии инфографики',
                'Not_Null'
            )
        ),
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