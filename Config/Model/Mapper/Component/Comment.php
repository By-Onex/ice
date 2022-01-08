<?php

return [
    'admin' => [
        'fields' => [
            'id',
            'ip',
            'author',
            'text',
            'rate',
            'rating',
            'createdAt',
            'rowId',
            'parendId',
            'table',
            'active',
            'isModerated',
            'statusId',
            'rejectReason',
            'statusRejectReason',
            'contentersComment',
            'dateOfVisit',
            'diagnosis',
        ],
        'styles' => [
            'active' => [
                'background-color:graytext',
            ],
        ],
    ],
    'signals' => [
        'afterInsert' => 'updateComponentComment',
        'afterDelete' => 'updateComponentComment',
        'updateComponentComment' => 'updateComponentComment',
    ],
    'comment' => 'Комментарий',
    'author' => 'neon',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'author' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Имя автора комментария',
                'Not_Null',
            ],
        ],
        'authorEmail' => [
            'Varchar',
            [
                'Size'    => 200,
                'Comment' => 'Email автора',
                'Not_Null',
            ],
        ],
        'ip' => [
            'Varchar',
            [
                'Size'    => 32,
                'Comment' => 'ip автора комментария',
                'Not_Null',
            ],
        ],
        'phpSessionId' => [
            'Varchar',
            [
                'Size'    => 128,
                'Comment' => 'id сессии',
                'Not_Null',
            ],
        ],
        'User__id' => [
            'Int',
            [
                'Comment' => 'Автор комментария',
                'Not_Null',
            ],
        ],
        'createdAt' => [
            'Datetime',
            [
                'Comment' => 'Дата создания комментария',
                'Not_Null',
            ],
        ],
        'lastUpdatedAt' => [
            'Datetime',
            [
                'Comment' => 'Дата последнего редактирования',
                'Not_Null',
            ],
        ],
        'text' => [
            'Text',
            [
                'Comment' => 'Текст комментария',
                'Not_Null',
            ],
        ],
        'rate' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Вес комментария (-1 - отрицательный комментарий,	0 - нейтрайльный, 1 - положительный)',
                'Not_Null',
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
                'Default' => 0,
                'Comment' => 'Родительский комментарий',
                'Not_Null',
            ],
        ],
        'positiveCount' => [
            'Int',
            [
                'Comment' => 'Количество оценок \"да\" комментария',
                'Not_Null',
            ],
        ],
        'negativeCount' => [
            'Int',
            [
                'Comment' => 'Количество оценок \"нет\" комментария',
                'Not_Null',
            ],
        ],
        'rowId' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'id владельца комментария',
                'Not_Null',
            ],
        ],
        'table' => [
            'Varchar',
            [
                'Size'    => 64,
                'Comment' => 'Название модели владельца комментария',
                'Not_Null',
            ],
        ],
        'isDeleted' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Комментарий удален?',
                'Not_Null',
            ],
        ],
        'deletedAt' => [
            'Datetime',
            [
                'Comment' => 'Дата последнего удаления комментария',
                'Not_Null',
            ],
        ],
        'active' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 1,
                'Comment' => 'Активность комментария',
                'Not_Null',
            ],
        ],
        'isSuspicious' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Является ли отзыв подозрительным',
                'Not_Null',
            ],
        ],
        'suspiciousDescription' => [
            'Text',
            [
                'Comment' => 'Причины подозрительности',
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
        'imagesJson' => [
            'Text',
            [
                'Comment' => 'json изображений',
                'Not_Null',
            ],
        ],
        'avatarUrl' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Url аватары',
                'Not_Null',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Город',
                'Not_Null',
            ],
        ],
        'Net_City__id' => [
            'Int',
            [
                'Comment' => 'ID города в базе Geo-IP',
            ],
        ],
        'banOnCompetition' => [
            'Tinyint',
            [
                'Comment' => 'ЗАпрет на участие в конкурсе комментариев',
                'Not_Null',
            ],
        ],
        'lastCommentsJson' => [
            'Varchar',
            [
                'Size'    => 255,
                'Comment' => 'Последние комменты в json',
                'Not_Null',
            ],
        ],
        'canEdit' => [
            'Tinyint',
            [
                'Default' => 1,
                'Comment' => 'Разрешено редактировать',
                'Not_Null',
            ],
        ],
        'Component_Comment_Cache__id' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Кеш комментария',
                'Not_Null',
            ],
        ],
        'emailPublic' => [
            'Int',
            [
                'Default' => 0,
                'Comment' => 'Пользователь отметил \"Показывать мой Email\"',
                'Not_Null',
            ],
        ],
        'emailValidated' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'email подтвержден автором',
                'Not_Null',
            ],
        ],
        'actualFactor' => [
            'Double',
            [
                'Default' => 0,
                'Comment' => 'Коэффициент актуальности',
                'Not_Null',
            ],
        ],
        'authenticFactor' => [
            'Double',
            [
                'Default' => 0,
                'Comment' => 'Коэффициент достоверности',
                'Not_Null',
            ],
        ],
        'weightedRate' => [
            'Double',
            [
                'Default' => 0,
                'Not_Null',
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
        'isAdvised' => [
            'Tinyint',
            [
                'Size'    => 1,
                'Default' => 0,
                'Comment' => 'Отправлен в раздел  консультаций',
                'Not_Null',
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
        'statusId' => [
            'Int',
            [
                'Default' => 1,
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
        'contentersComment' => [
            'Text',
            [
                'Comment' => 'комментарий контента',
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
    ],
];
