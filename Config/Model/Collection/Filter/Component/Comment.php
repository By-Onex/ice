<?php
/**
 * Конфигурация фильтров для модели Component_Comment
 *
 * Именно эти фильтры будут использоваться для Model_Collection_Filter_Pool по модели Component_Comment,
 * создавая в итоге форму фильтрации с помощью пары строк кода в любом месте.
 *
 * @author LiverEnemy
 */

return [
    'admin' => [
        'filters' => [
            'Component_Comment_Not_Cached',
        ],
        'sort' => [
            'fields' => [],
            'fieldParamName' => 'sort[Component_Comment][field]',
            'orderParamName' => 'sort[Component_Comment][order]',
        ],
    ],
];