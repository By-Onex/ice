<?php
/**
 * Конфигурация фильтров для модели Content
 *
 * Именно эти фильтры будут использоваться для Model_Collection_Filter_Pool по модели Content,
 * создавая в итоге форму фильтрации с помощью пары строк кода в любом месте.
 *
 * @author LiverEnemy
 */

return [
    'admin' => [
        'filters' => [
            'Content_Find',
            'Content_Content_Category_Id',
            'Content_Article_Clinic_Snippet',
        ],
        'sort' => [
            'fields' => [
                'title',
                'Content_Category__id',
            ],
            'fieldParamName' => 'sort[Content][field]',
            'orderParamName' => 'sort[Content][order]',
        ],
    ],
];