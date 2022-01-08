<?php

return [
    'admin' => [
        'title' => 'fio',
    ],
    'signals' => [
        'afterDelete' => 'updateDoctor',
        'updateDoctor' => 'updateDoctor',
    ],
    'comment' => 'Врачи, работающие в стоматологиях',
    'author' => 'haosit',
    'fields' => [
        'id' => [
            'Int',
            [
                'Comment' => 'Первичный ключ',
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'spb_id' => [
            'Int',
            [
                'Not_Null',
            ],
        ],
        'fio' => [
            'Text',
            [
                'Comment' => 'ФИО врача',
                'Not_Null',
            ],
        ],
        'birthdate' => [
            'Date',
            [
                'Comment' => 'Дата рождения',
                'Not_Null',
            ],
        ],
        'previous_works' => [
            'Text',
            [
                'Comment' => 'Предыдущий опыт работы',
                'Not_Null',
            ],
        ],
        'education' => [
            'Text',
            [
                'Comment' => 'Образование',
                'Not_Null',
            ],
        ],
        'additionalEducation' => [
            'Text',
            [
                'Comment' => 'Дополнительное образование',
                'Not_Null',
            ],
        ],
        'awards' => [
            'Text',
            [
                'Comment' => 'Заработанные стоматологом награды',
                'Not_Null',
            ],
        ],
        'description' => [
            'Text',
            [
                'Comment' => 'Произвольная статья про врача',
                'Not_Null',
            ],
        ],
        'show' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать ли врача на сайте',
                'Not_Null',
            ],
        ],
        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Активно',
                'Not_Null',
            ],
        ],
        'altUrl' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Использовать альтернативный урл страницы',
                'Not_Null',
            ],
        ],
        'clinics' => [
            'Text',
            [
                'Comment' => 'Введенные посетителем сайта клиники, в которых работает добавляемый врач',
                'Not_Null',
            ],
        ],
        'User__id' => [
            'Int',
            [
                'Default' => 0,
                'Not_Null',
            ],
        ],
        'createTime' => [
            'Datetime',
            [
                'Not_Null',
            ],
        ],
        'updateTime' => [
            'Datetime',
            [
                'Not_Null',
            ],
        ],
        'priority' => [
            'Smallint',
            [
                'Comment' => 'приоритет стоматолога',
                'Not_Null',
            ],
        ],
        'rating' => [
            'Double',
            [
                'Default' => -100,
                'Comment' => 'Рейтинг, высчитываеться автоматом',
                'Not_Null',
            ],
        ],
        'rating_place' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Место доктора в рейтинге',
                'Not_Null',
            ],
        ],
        'comment_votes' => [
            'Int',
            [
                'Not_Null',
            ],
        ],
        'comment_positive' => [
            'Int',
            [
                'Not_Null',
            ],
        ],
        'comment_count' => [
            'Varchar',
            [
                'Size' => 50,
                'Not_Null',
            ],
        ],
        'hide_negative_comments' => [
            'Tinyint',
            [
                'Default' => 0,
                'Comment' => 'скрывать отрицательные',
                'Not_Null',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'Город',
                'Not_Null',
            ],
        ],
        'payed' => [
            'Int',
            [
                'Default' => 0,
                'Not_Null',
            ],
        ],
        'filled' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'уровень заполнености контента',
                'Not_Null',
            ],
        ],
        'last_comment_time' => [
            'Datetime',
            [
                'Comment' => 'Время последнего коммента',
                'Not_Null',
            ],
        ],
        'imageUrl' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Аватара',
                'Not_Null',
            ],
        ],
        'hasImage' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Есть аватара',
                'Not_Null',
            ],
        ],
        'hidePriceCategoryTitle' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Скрывать ценовую категорию',
                'Not_Null',
            ],
        ],
        'url' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Ссылка на доктора',
                'Not_Null',
            ],
        ],
        'priceCategoryTitle' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Название ценовой категории',
                'Not_Null',
            ],
        ],
        'postTitle' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Название должности',
                'Not_Null',
            ],
        ],
        'metroJson' => [
            'Text',
            [
                'Comment' => 'Метро в json',
                'Not_Null',
            ],
        ],
        'discountJson' => [
            'Text',
            [
                'Comment' => 'Связанные скидки в json',
                'Not_Null',
            ],
        ],
        'Clinic_Price_Category__id' => [
            'Int',
            [
                'Comment' => 'Ценовая категория клиники',
                'Not_Null',
            ],
        ],
        'discountCreator' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'возможности размещения акций на своих клиниках',
                'Not_Null',
            ],
        ],
        'positon' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Приоритет в поиске',
                'Not_Null',
            ],
        ],
        'similarDoctorJson' => [
            'Text',
            [
                'Comment' => 'Похожие врачи в json',
                'Not_Null',
            ],
        ],
        'relationPosition' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Позиция в поднятии',
            ],
        ],
        'email' => [
            'Varchar',
            [
                'Size'    => 256,
                'Default' => '',
                'Comment' => 'Email доктора',
                'Not_Null',
            ],
        ],
        'emailValidated' => [
            'Tinyint',
            [
                'Default' => 0,
                'Comment' => 'Подтвержден ли email',
                'Not_Null',
            ],
        ],
        'workExperience' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Стаж работы',
                'Not_Null',
            ],
        ],
        'workStartedAt' => [
            'Date',
            [
                'Comment' => 'Дата начала врачебной деятельности',
                'Not_Null',
            ],
        ],
        'degre' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Comment' => 'Ученая степень',
                'Not_Null',
            ],
        ],
        'category' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Категория стамотолога',
                'Not_Null',
            ],
        ],
        'priceOfAdmission' => [
            'Varchar',
            [
                'Size' => 64,
            ],
        ],
        'clinic_id' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Comment' => 'Клиника в которой работает врач',
                'Not_Null',
            ],
        ],
        'searchWeight' => [
            'Int',
        ],
        'site' => [
            'Varchar',
            [
                'Size'    => 256,
                'Default' => '',
                'Comment' => 'Сайт доктора',
                'Not_Null',
            ],
        ],
        'isModerated' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Промодерировано',
                'Not_Null',
            ],
        ],
        'phone' => [
            'Varchar',
            [
                'Size'    => 256,
                'Default' => '',
                'Comment' => 'телфон доктора',
                'Not_Null',
            ],
        ],
        'orderToDoctor' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'заявка отправляется на доктора',
                'Not_Null',
            ],
        ],
        'isPaid' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Платность доктора по зависимостям',
                'Not_Null',
            ],
        ],
        'homeVisit' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Выезд на дом',
                'Not_Null',
            ],
        ],
        'candidateOfSciences' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'к.м.н',
                'Not_Null',
            ],
        ],
        'doctorOfSciences' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'д.м.н',
                'Not_Null',
            ],
        ],
        'mainDoctor' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Главный врач',
                'Not_Null',
            ],
        ],
        'whiteRating' => [
            'Double',
            [
                'Default' => -100,
                'Comment' => 'Рейтинг для страницы whitelist',
                'Not_Null',
            ],
        ],
        'hasSchedule' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Есть расписание',
                'Not_Null',
            ],
        ],
        'hasScheduleUpdatedAt' => [
            'Timestamp',
            [
                'Default' => '0000-00-00 00:00:00',
                'Comment' => 'Время обновления поля hasSchedule',
                'Not_Null',
            ],
        ],
        'paidWithoutClinic' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Comment' => 'платность доктора без учета платной клиники',
                'Not_Null',
            ],
        ],
    ],
    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],
        'spb_id' => [
            'Key',
            ['spb_id'],
        ],
    ],
];