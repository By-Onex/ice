<?php
/**
 * Конфиг формы фильтрации статей в админке
 */
return [
    'fields' => [
        'Content_Find',
        'Content_Content_Category_Id',
        'Sort_Field' => [
            'label' => 'Поле сортировки',
            'items' => [
                'id' => 'ID',
                'title' => 'Название',
                'sort' => 'Приоритет в списке',
            ],
        ],
        'Sort_Order',
    ],
];