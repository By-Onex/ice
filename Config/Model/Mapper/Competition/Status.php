<?php

return array(
    'admin' => array(
        'fields' => array(
            'id', 'title'
        ),
        'links' => array(
            'id', 'title'
        ),
    ),
    'comment' => 'Статусы конкурсов комментариев',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'ID',
                'Null',
                'Auto_Increment'
            )
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 40,
                'Default' => null,
                'Comment' => 'Название статуса',
                'Null'
            )
        )
    ),
    'indexes' => array(
        'id_index' => array(
            'Primary',
            array('id')
        )
    )
);
