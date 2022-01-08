<?php

return array(
    'admin' => array(
        'fields' => array(
            'id', 'Competition__id', 'Component_Comment__id', 'place', 'Mail_Message__id'
        ),
        'includes' => array(
            'Competition__id' => 'Competition',
        )
    ),
    'comment' => 'Победители конкурсов комментариев',
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
        'Competition__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'ID конкурса',
                'Not_Null'
            )
        ),
        'Component_Comment__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'ID комментария - победителя',
                'Not_Null'
            )
        ),
        'place' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Место которое занял победитель',
                'Null'
            )
        ),
        'Mail_Message__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'ID sms отправленного победителю',
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
