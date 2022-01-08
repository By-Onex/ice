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
                'Comment' => 'Тайтл градации стажа',
            ),
        ),
        'min' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Минимальное значение стажа',
                'Null'
            )
        ),
        'max' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Максимальное значение стажа',
                'Null'
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