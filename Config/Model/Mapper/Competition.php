<?php

return array(
    'admin' => array(
        'fields' => array(
            'id', 'start_time', 'finish_time', 'prizes', 'Competition_Status__id'
        ),
        'includes' => array(
            'Competition_Status__id' => 'Competition_Status'
        ),
        'rowPlugins' => array(
            'General' => array(
                'Admin_Plugin_Competition_Candidate' => array(
                    'title' => 'Участники конкурса',
                    'tpl' => 'index'
                ),
                'Admin_Plugin_Competition_Sms' => array(
                    'title' => 'Смс оповещение победителей',
                    'tpl' => 'smsNotification'
                )
            ),
        ),
        'tabs' => array(
            array(
                'action' => 'smsNotification',
                'name' => 'Смс оповещение'
            )
        ),
        'title' => array(
            'start_time'=>'start_time',
            'finish_time'=>'finish_time',
            'Competition_Status__id' => 'Competition_Status__id'
        ),
        'filters' => array(
			'City__id' => 'City::id'
		),
    ),
    'signals'       => array(
        'afterInsert'      => 'insertCompetition'
    ),
    'title_fields' => array(
        'start_time', 'finish_time'
    ),
    'comment' => 'Конкурсы комментариев',
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
        'Competition_Status__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'ID статуса конкурса',
                'Not_Null'
            )
        ),
        'start_time' => array(
            'Datetime',
            array(
                'Comment' => 'Дата и время начала конкурса',
                'Not_Null'
            )
        ),
        'finish_time' => array(
            'Datetime',
            array(
                'Comment' => 'Дата и время завершения конкурса',
                'Not_Null'
            )
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,
                'Default' => 1,
                'Comment' => 'Показывать или нет на сайте. По умолчанию 1(показывать)',
                'Not_Null'
            )
        ),
        'prizes' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Default' => null,
                'Comment' => 'Награды в виде целых чисел через запятую начиная с первого места',
                'Not_Null'
            )
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'id города',
                'Not_Null'
            )
        ),
        'emails' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Default' => null,
                'Comment' => 'email\\\'ы победителей через запятую',
                'Not_Null'
            )
        ),
        'bestComments' => array(
            'Text',
            array(
                'Default' => null,
                'Comment' => 'Комментарии-призеры конкурса',
                'Null'
            )
        ),
        'textActive' => array(
            'Text',
            array(
                'Default' => '',
                'Comment' => 'Текст во время проведения конкурса',
                'Not_Null'
            )
        ),
        'textFinished' => array(
            'Text',
            array(
                'Default' => '',
                'Comment' => 'Текст после завершения конкурса',
                'Not_Null'
            )
        ),
        'positiveCountMin' => array(
            'SmallInt',
            array(
                'Default' => 0,
                'Comment' => 'Наименьшее количество лайков у призеров',
                'Not_Null'
            )
        ),
        'positiveCountMax' => array(
            'SmallInt',
            array(
                'Default' => 0,
                'Comment' => 'Наибольшее количество лайков у призеров',
                'Not_Null'
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
