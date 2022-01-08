<?php

return array(


    'fields' => array(
        'id' => array(
            'Int',

            array(
                'Size' =>
                11
            ,

                'Not_Null'
            ,
                'Auto_Increment'

            )
        ),
        'name' => array(
            'Varchar',

            array(
                'Size' =>
                50

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
