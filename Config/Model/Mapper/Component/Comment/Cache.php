<?php

return [
    'comment' => 'Кеш комментариев',
    'author' => 'markov',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'Component_Comment__id' => [
            'Int',
            [
                'Not_Null',
            ],
        ],
        'active' => [
            'Int',
            [
                'Comment' => 'Показывать',
                'Not_Null',
            ],
        ],
        'isModerated' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Комментарий прошел модерацию?',
                'Not_Null',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Город сущности-владельца комментария',
                'Not_Null',
            ],
        ],
        'author' => [
            'Varchar',
            [
                'Size'    => 128,
                'Comment' => 'Имя автора комментария',
            ],
        ],
        'authorEmail' => [
            'Varchar',
            [
                'Size'    => 200,
                'Comment' => 'Email автора',
            ],
        ],
        'phpSessionId' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'id сессии',
            ],
        ],
        'User__id' => [
            'Int',
            [
                'Comment' => 'Автор комментария',
            ],
        ],
        'createdAt' => [
            'Datetime',
            [
                'Comment' => 'Дата создания комментария',
            ],
        ],
        'text' => [
            'Text',
            [
                'Comment' => 'Текст комментария',
            ],
        ],
        'rate' => [
            'Int',
            [
                'Comment' => 'Вес комментария (-1 - отрицательный комментарий,\\n					0 - нейтрайльный, 1 - положительный)',
            ],
        ],
        'rating' => [
            'Int',
            [
                'Comment' => 'оценка отзыва',
                'Not_Null',
            ],
        ],
        'parentId' => [
            'Int',
            [
                'Comment' => 'Родительский комментарий',
            ],
        ],
        'positiveCount' => [
            'Int',
            [
                'Comment' => 'Количество оценок \\\"да\\\" комментария',
            ],
        ],
        'ip' => [
            'Varchar',
            [
                'Size'    => 50,
                'Comment' => 'IP-адрес хоста автора',
                'Not_Null',
            ],
        ],
        'negativeCount' => [
            'Int',
            [
                'Comment' => 'Количество оценок \\\"нет\\\" комментария',
            ],
        ],
        'rowId' => [
            'Int',
            [
                'Comment' => 'id владельца комментария',
            ],
        ],
        'table' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'Название модели владельца комментария',
            ],
        ],
        'page' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Номер страницы в списке комментов владельца, где находится данный коммент',
                'Not_Null',
            ],
        ],
        'level' => [
            'Tinyint',
            [
                'Comment' => 'Уровень вложенности комментария',
                'Unsigned',
            ],
        ],
        'margin' => [
            'Smallint',
            [
                'Comment' => 'Отступ',
                'Unsigned',
            ],
        ],
        'onlyView' => [
            'Tinyint',
            [
                'Comment' => 'Только просмотр',
                'Unsigned',
            ],
        ],
        'isSuspicious' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Comment' => 'Является ли отзыв подозрительным',
                'Not_Null',
            ],
        ],
        'imagesJson' => [
            'Text',
            [
                'Comment' => 'url картинок в json формате',
            ],
        ],
        'avatarUrl' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'url до аватарки',
            ],
        ],
        'siteUrl' => [
            'Varchar',
            [
                'Size'    => 200,
                'Comment' => 'URL ссылки на коммент на странице владельца',
            ],
        ],
        'lastCommentsJson' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Последние еокмментарии json',
            ],
        ],
        'canEdit' => [
            'Tinyint',
            [
                'Default' => 1,
                'Comment' => 'Разрешено редактировать',
            ],
        ],
        'isSuspended' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Удален по просьбе администрации',
                'Not_Null',
            ],
        ],
        'banOnCompetition' => [
            'Tinyint',
            [
                'Comment' => 'Запрет на участие в конкурсе комментариев',
            ],
        ],
        'Forum_Topic__id' => [
            'Int',
            [
                'Comment' => 'ID топика связанной темы',
                'Not_Null',
            ],
        ],
        'postCount' => [
            'Int',
            [
                'Comment' => 'количество постов в относящейся теме',
                'Not_Null',
            ],
        ],
        'rootPositiveCount' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Количество позитивных оценок корневого комментария',
                'Not_Null',
            ],
        ],
        'rootId' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Корневой комметарий',
                'Not_Null',
            ],
        ],
        'statusId' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Статус отзыва',
                'Not_Null',
            ],
        ],
        'rejectReason' => [
            'Varchar',
            [
                'Size'    => 500,
                'Comment' => 'Причина отклонения отзыва',
                'Not_Null',
            ],
        ],
        'checkedAnswer' => [
            'Int',
            [
                'Not_Null',
            ],
        ],
        'statusRejectReason' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Статус, причины отклонения отзыва',
                'Not_Null',
            ],
        ],
        'getBySite' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'отзыв оставлен через сайт',
                'Not_Null',
            ],
        ],
        'verified' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'проверено',
                'Not_Null',
            ],
        ],
        'excludeFromRating' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'не участвует в рейтинге',
                'Not_Null',
            ],
        ],
        'fromClinic' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'ответ от клиники',
                'Not_Null',
            ],
        ],
        'fromDoctor' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Автор комментария - доктор',
                'Not_Null',
            ],
        ],
        'dateOfVisit' => [
            'Date',
            [
                'Comment' => 'Дата посещения клиники',
                'Not_Null',
            ],
        ],
        'diagnosis' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Диагноз',
                'Not_Null',
            ],
        ],
        'fromRowId' => [
            'Int',
            [
                'Comment' => 'Id клиники/доктора, кто оставил коммент',
                'Not_Null',
            ],
        ],
        'showInOtzyv' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Показывать комментарий в разделе отзывов на услуги',
                'Not_Null',
            ],
        ],
    ],
    'indexes' => [
        'id' => [
            'Primary',
            ['id'],
        ],
        'rowId_table_index_index' => [
            'Key',
            ['rowId'],
        ],
        'Component_Comment__id_index_index' => [
            'Key',
            ['Component_Comment__id'],
        ],
    ],
];
