<?php

return [
    'admin' => [
        'title' => 'old_name',
        'fields' => [
            'id',
            'old_name',
            'City__id',
            'site',
            'telephone',
            'address',
            'email',
        ],
        'rowPlugins' => [
            'Top' => [
                'Admin_Plugin_Clinic_Blank_Notification' => [
                    'title' => 'Сообщение о рекеше бланка клиники',
                ],
            ],
            'General' => [
                'Admin_Plugin_Clinic_Blank_Notification' => [
                    'title' => 'Сообщение о рекеше бланка клиники',
                ],
                'Admin_Plugin_Clinic_Blank' => [
                    'title' => 'Бланк клиники',
                ],
            ],
        ],
    ],
    'signals' => [
        'afterInsert' => 'insertClinic',
    ],
    'comment' => 'Клиники',
    'author' => 'bogatov.es',
    'fields' => [
        'id' => [
            'Int',
            [
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
        'Gender__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Лексический род названия клииники',
                'Not_Null',
            ],
        ],
        'old_name' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Название',
                'Not_Null',
            ],
        ],
        'name_prefix' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Префикс названия',
                'Not_Null',
            ],
        ],
        'short_name' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Название клиники',
                'Not_Null',
            ],
        ],
        'name_suffix' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Постфикс названия',
                'Not_Null',
            ],
        ],
        'description' => [
            'Mediumtext',
            [
                'Comment' => 'Описание клиники',
                'Not_Null',
            ],
        ],
        'description_full' => [
            'Mediumtext',
            [
                'Comment' => 'Полное описание акций и скидок для страницы клиники',
                'Not_Null',
            ],
        ],
        'article' => [
            'Mediumtext',
            [
                'Comment' => 'Имиджевая статья для клиники',
                'Not_Null',
            ],
        ],
        'show_article' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать ли имиджевую статью (0 - не показывать)',
                'Not_Null',
            ],
        ],
        'doctorOpinionArticleJson' => [
            'Mediumtext',
            [
                'Comment' => 'JSON статей, на которых показывается сниппет этой клиники',
                'Not_Null',
            ],
        ],
        'address' => [
            'Mediumtext',
            [
                'Not_Null',
            ],
        ],
        'proezd' => [
            'Mediumtext',
            [
                'Comment' => 'Схема проезда (текст)',
                'Not_Null',
            ],
        ],
        'telephone' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Номера телефонов',
                'Not_Null',
            ],
        ],
        'snippetImageId' => [
            'Int',
            [
                'Default' => 0,
            ],
        ],
        'site' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Адрес сайта',
                'Not_Null',
            ],
        ],
        'ceny' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Not_Null',
            ],
        ],
        'price_consult' => [
            'Varchar',
            [
                'Size'    => 100,
                'Default' => 0,
                'Comment' => 'цена консультации (-1 неизваетсно, 0 неопрделена,  1 цена консультации)',
                'Not_Null',
            ],
        ],
        'price_in_medication' => [
            'Int',
            [
                'Comment' => 'Входит ли цена  в стоимость лечения',
                'Not_Null',
            ],
        ],
        'comment_count' => [
            'Varchar',
            [
                'Size'    => 200,
                'Comment' => 'в формате (+20|0|-1)',
                'Not_Null',
            ],
        ],
        'comment_positive' => [
            'Int',
            [
                'Comment' => '(Сумм(+Отз) - Сумм(-Отз)) ',
                'Not_Null',
            ],
        ],
        'comment_votes' => [
            'Int',
            [
                'Comment' => 'Общее число комментариев',
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
                'Comment' => 'Место клиники в рейтинге',
                'Not_Null',
            ],
        ],
        'District__id' => [
            'Int',
        ],
        'ceny_text' => [
            'Mediumtext',
            [
                'Comment' => 'Замещающий текст для подробного описания ценовой категории клиники (при нажатии на знак вопроса)',
                'Not_Null',
            ],
        ],
        'redirect' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Ссылаться на сайт только с редиректом',
                'Not_Null',
            ],
        ],
        'email' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'E-mail',
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
        'hours' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Часы работы',
                'Not_Null',
            ],
        ],
        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Активна',
                'Not_Null',
            ],
        ],
        'text1' => [
            'Mediumtext',
            [
                'Not_Null',
            ],
        ],
        'text2' => [
            'Mediumtext',
            [
                'Not_Null',
            ],
        ],
        'text3' => [
            'Mediumtext',
            [
                'Not_Null',
            ],
        ],
        'rightTitle' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Текст заголовка клиники при показе ее в рекламном блоке справа',
                'Not_Null',
            ],
        ],
        'rightText' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Текст о скидках и прочем у стоматологий, размещающихся в списке справа',
                'Not_Null',
            ],
        ],
        'right_HTML' => [
            'Mediumtext',
            [
                'Comment' => 'HTML-код, отображаемый у клиники в списке справа вместо обычного текста',
                'Not_Null',
            ],
        ],
        'show_teaser' => [
            'Tinyint',
            [
                'Default' => 0,
                'Comment' => 'Показывать тизер',
                'Not_Null',
            ],
        ],
        'action' => [
            'Mediumtext',
            [
                'Comment' => 'Текст Акциий стоматологий',
                'Not_Null',
            ],
        ],
        'top_list_banner_show' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать ли в списке стоматологий баннер из поля top_list_banner_HTML',
                'Not_Null',
            ],
        ],
        'top_list_banner_HTML' => [
            'Mediumtext',
            [
                'Comment' => 'Код верхнего баннера для списка стоматологий',
                'Not_Null',
            ],
        ],
        'top_position' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Comment' => 'Всегда выводить первой',
                'Not_Null',
            ],
        ],
        'positon' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Приоритет сортировки в результатах поиска',
                'Not_Null',
            ],
        ],
        'position_mainpage' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Приоритет сортировки при показе на Главной',
                'Not_Null',
            ],
        ],
        'position_right' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Приоритет сортировки в привилегированном столбце',
                'Not_Null',
            ],
        ],
        'hide_negative_comments' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Скрывать отрицательные отзывы',
                'Not_Null',
            ],
        ],
        'position_variant' => [
            'Enum',
            [
                'Size'    => [
                    'none',
                    'site',
                    'site_no_index',
                ],
                'Default' => [
                    'none',
                ],
                'Comment' => [
                    'Вариант показа рекламы: none - со ссылкой на страницу на 32top, site - со ссылкой на сайт стоматологии',
                ],
                'Not_Null',
            ],
        ],
        'proezd_schema' => [
            'Mediumtext',
            [
                'Comment' => 'Карта проезда',
                'Not_Null',
            ],
        ],
        'note' => [
            'Mediumtext',
            [
                'Comment' => 'Комментарии',
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
        'Price_Type__id' => [
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
        'is_nc' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Not_Null',
            ],
        ],
        'user_telephone' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'телефон добавившего',
                'Not_Null',
            ],
        ],
        'user_fio' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'ФИО добавившего',
                'Not_Null',
            ],
        ],
        'sms_phone' => [
            'Varchar',
            [
                'Size'    => 18,
                'Comment' => 'мобильный телефон клиники для смс',
                'Not_Null',
            ],
        ],
        'is_first_photo' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Не показывать первое фото клиники в списке клиник',
                'Not_Null',
            ],
        ],
        'sms_mobile' => [
            'Varchar',
            [
                'Size' => 11,
                'Not_Null',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'город, в котором находится клиника',
                'Not_Null',
            ],
        ],
        'Clinic_Net__id' => [
            'Int',
            [
                'Comment' => 'Сеть',
                'Not_Null',
            ],
        ],
        'histPlacement' => [
            'Mediumtext',
            [
                'Comment' => 'История размещений',
                'Not_Null',
            ],
        ],
        'show_link' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Comment' => 'Показывать ссылку на отзывы',
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
        'url' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Урл',
                'Not_Null',
            ],
        ],
        'Clinic_Type__id' => [
            'Int',
            [
                'Comment' => 'Вид клиники',
                'Not_Null',
            ],
        ],
        'clinicTypeTitle' => [
            'Varchar',
            [
                'Size'    => 92,
                'Comment' => 'Название типа клиники',
                'Not_Null',
            ],
        ],
        'metroJson' => [
            'Mediumtext',
            [
                'Comment' => 'Метро в json',
                'Not_Null',
            ],
        ],
        'workTimeJson' => [
            'Mediumtext',
            [
                'Comment' => 'Рабочее время в json',
                'Not_Null',
            ],
        ],
        'priceCategoryTitle' => [
            'Varchar',
            [
                'Size'    => 92,
                'Comment' => 'Название ценовой категории',
                'Not_Null',
            ],
        ],
        'imageUrl' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Превьюшка клиники',
                'Not_Null',
            ],
        ],
        'hasImage' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Есть ли превьюшка',
                'Not_Null',
            ],
        ],
        'totalScore' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Суммарный рейтинг',
                'Not_Null',
            ],
        ],
        'stockCount' => [
            'Smallint',
            [
                'Default' => 0,
                'Comment' => 'Кол-во акций',
                'Not_Null',
            ],
        ],
        'netCount' => [
            'Smallint',
            [
                'Default' => 0,
                'Comment' => 'Кол-во филиалов',
                'Not_Null',
            ],
        ],
        'hasServiceWithPrice' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Есть услуги с ценой',
                'Not_Null',
            ],
        ],
        'cityTitle' => [
            'Varchar',
            [
                'Size'    => 200,
                'Comment' => 'Название города клиники',
                'Not_Null',
            ],
        ],
        'longitude' => [
            'Decimal',
            [
                'Size'    => [
                    '16',
                    '13',
                ],
                'Default' => 0.0000000000000,
                'Comment' => 'Долгота',
                'Not_Null',
            ],
        ],
        'latitude' => [
            'Decimal',
            [
                'Size'    => [
                    '16',
                    '13',
                ],
                'Default' => 0.0000000000000,
                'Comment' => 'Широта',
                'Not_Null',
            ],
        ],
        'hasBanner' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Есть баннер',
                'Not_Null',
            ],
        ],
        'closestClinicsJson' => [
            'Mediumtext',
            [
                'Comment' => 'Ближайшие клиники в json',
                'Not_Null',
            ],
        ],
        'doctorCount' => [
            'Smallint',
            [
                'Default' => 0,
                'Comment' => 'Количество докторов',
                'Not_Null',
            ],
        ],
        'hasServiceChild' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Comment' => 'Есть ли детская стоматология',
                'Not_Null',
            ],
        ],
        'isAwarded' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Есть ли награда',
                'Not_Null',
            ],
        ],
        'isPaid' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Есть ли другие оплачиваемые услуги',
                'Not_Null',
            ],
        ],
        'showPriceLink' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Показывать ссылку на страницу цен?',
                'Not_Null',
            ],
        ],
        'hideSimilarDiscount' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Скрыть блок похожих акций?',
                'Not_Null',
            ],
        ],
        'relationPosition' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Поле поднятия по связям для общего поиска',
            ],
        ],
        'positionUpdatedAt' => [
            'Datetime',
            [
                'Comment' => 'Дата поднятия по связям',
            ],
        ],
        'hasOrderTab' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Есть вкладка заявки на прием',
                'Not_Null',
            ],
        ],
        'purpose' => [
            'Text',
            [
                'Comment' => 'Причина добавления',
            ],
        ],
        'healingDMS' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Лечение по ДМС',
                'Not_Null',
            ],
        ],
        'healingOMS' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Лечение по ОМС',
                'Not_Null',
            ],
        ],
        'haveOtherPaid' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Есть ли другие платные услуги',
            ],
        ],
        'voiceCall' => [
            'Tinyint',
            [
                'Default' => 0,
                'Comment' => 'Использовать голосовой вызов при заявке',
                'Not_Null',
            ],
        ],
        'voiceCallPhone' => [
            'Varchar',
            [
                'Size'    => 128,
                'Default' => '',
                'Comment' => 'Телефон для голосового вызова',
                'Not_Null',
            ],
        ],
        'searchWeight' => [
            'Int',
        ],
        'notificateAboutComment' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Уведомлять ли клинику о новом отзыве',
                'Not_Null',
            ],
        ],
        'closestPaidClinicId' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Id ближайшей платной клиники',
                'Not_Null',
            ],
        ],
        'Clinic_Trigger_Type__id' => [
            'Int',
            [
                'Comment' => 'Id типа триггера',
            ],
        ],
        'createAtClinic' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Год основания клиники',
                'Not_Null',
            ],
        ],
        'postcode' => [
            'Int',
            [
                'Comment' => 'Почтовый индекс',
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
        'emails' => [
            'Varchar',
            [
                'Size'    => 255,
                'Default' => '',
                'Comment' => 'все емаилы клиник',
                'Not_Null',
            ],
        ],
        'nonstop' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Работает круглосуточно',
                'Not_Null',
            ],
        ],
        'sevenDays' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Работает без выходных',
                'Not_Null',
            ],
        ],
        'closeToMetro' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Близко к метро',
                'Not_Null',
            ],
        ],
        'countAcademics' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Количество врачей с ученой степенью',
                'Not_Null',
            ],
        ],
        'countHighestCategory' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Количество врачей высшей категории',
                'Not_Null',
            ],
        ],
        'avgDoctorRating' => [
            'Double',
            [
                'Default' => 0,
                'Comment' => 'Средний рейтинг врачей',
                'Not_Null',
            ],
        ],
        'avgDoctorExperience' => [
            'Double',
            [
                'Default' => 0,
                'Comment' => 'Средний стаж врачей',
                'Not_Null',
            ],
        ],
        'noInRating' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Не участвует в рейтинге',
                'Not_Null',
            ],
        ],
        'filled' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Заполненность данных',
                'Not_Null',
            ],
        ],
        'metaDescription' => [
            'Text',
            [
                'Comment' => 'мета дескрипшен',
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
        'forceIsPaid' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Принудительная платность клиники',
                'Not_Null',
            ],
        ],
        'hideAvgPrice' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Скрывать средние цены',
                'Not_Null',
            ],
        ],
        'notUnloadEmail' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Не выгружать email',
                'Not_Null',
            ],
        ],
        'covidSafe' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Защита от COVID-19',
                'Not_Null',
            ],
        ],
        'identPassword' => [
            'Char',
            [
                'Size'    => 60,
                'Comment' => 'Хеш пароля для интеграции с ident',
            ],
        ],
        'temporaryClosed' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'клиника временно не работает',
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
    ],
    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],
        'Price_Type__id' => [
            'Key',
            ['Price_Type__id'],
        ],
        'district' => [
            'Key',
            ['District__id'],
        ],
        'name' => [
            'Key',
            ['old_name'],
        ],
        'spb_id' => [
            'Key',
            ['spb_id'],
        ],
        'adress' => [
            'Key',
            ['address'],
        ],
    ],
];