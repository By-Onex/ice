<?php

return array(
    'fields' => array(
        'ampHtml' => array(
            'Text',
            array(
                'Comment' => 'HTML для amp-версии'
            )
        ),
        'titleText' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Comment' => 'Текст заголовок',
                'Not_Null'
            )
        ),
        'IsHtml5' => array(
            'Tinyint',
            array(
                'Size' => 1,
                'Comment' => 'Является ли html5 баннером',
                'Not_Null'
            )
        ),
        'showWhen' => array(
            'Tinyint',
            array(
                'Size' => 4,
                'Not_Null'
            )
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 10,
                'Not_Null'
            )
        ),
        'Banner_Delegate__id' => array(
            'Int',
            array(
                'Size' => 10,
                'Comment' => 'Тип баннера',
                'Not_Null'
            )
        ),
        'Banner_Table__id' => array(
            'Int',
            array(
                'Size' => 10,
                'Comment' => 'Модель (куда крепить)',
                'Not_Null'
            )
        ),
        'id' => array(
            'Int',
            array(
                'Size' => 11,
                'Not_Null',
                'Auto_Increment'
            )
        ),
        'table' => array(
            'Varchar',
            array(
                'Size' => 65,
                'Comment' => 'Название модели'
            )
        ),
        'rowId' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Id модели'
            )
        ),
        'name' => array(
            'Varchar',
            array(
                'Size' => 64,
                'Comment' => 'Название делегата фабрики'
            )
        ),
        'title' => array(
            'Varchar',
            array(
                'Size' => 64,
                'Comment' => 'Заголовок баннера'
            )
        ),
        'text' => array(
            'Text',
            array(
                'Comment' => 'Текст',
                'Not_Null'
            )
        ),
        'html' => array(
            'Text',
            array(
                'Comment' => 'Html представление баннера',
                'Not_Null'
            )
        ),
        'url' => array(
            'Varchar',
            array(
                'Size' => 255,
                'Comment' => 'Ссылка баннера'
            )
        ),
        'imageUrl' => array(
            'Varchar',
            array(
                'Size' => 128,
                'Comment' => 'Url картинки баннера'
            )
        ),
        'placeholderUrl' => array(
            'Varchar',
            array(
                'Size' => 128,
                'Comment' => 'Url заглушки'
            )
        ),
        'isSwf' => array(
            'Tinyint',
            array(
                'Size' => 1,
                'Comment' => 'Является ли баннер flash'
            )
        ),
        'width' => array(
            'Varchar',
            array(
                'Size' => 6,
                'Comment' => 'Ширина баннера'
            )
        ),
        'height' => array(
            'Varchar',
            array(
                'Size' => 6,
                'Comment' => 'Высота баннера'
            )
        ),
        'bgcolor' => array(
            'Varchar',
            array(
                'Size' => 8,
                'Comment' => 'Цвет фона',
                'Not_Null'
            )
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,
                'Comment' => 'Активность'
            )
        ),
        'rotationGroup' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Номер группы ротации'
            )
        ),
        'target' => array(
            'Tinyint',
            array(
                'Size' => 1,
                'Comment' => 'Открывать в новой вкладке',
                'Not_Null'
            )
        ),
        'nofollow' => array(
            'Tinyint',
            array(
                'Size' => 1,
                'Comment' => 'Индексировать',
                'Not_Null'
            )
        ),
        'sort' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Порядок следования'
            )
        ),
        'showPercent' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Процент показа',
                'Not_Null'
            )
        ),
        'Banner_Position__id' => array(
            'Int',
            array(
                'Size' => 11,
                'Comment' => 'Позиция баннера'
            )
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 10,
                'Not_Null'
            )
        ),
        'lineLinks' => array(
            'Text',
            array(
                'Comment' => 'поле для ссылок',
                'Not_Null'
            )
        ),
        'link1' => array(
            'Text',
            array(
                'Comment' => 'поле для ссылок',
                'Not_Null'
            )
        ),
        'link2' => array(
            'Text',
            array(
                'Comment' => 'поле для ссылок',
                'Not_Null'
            )
        ),
        'link3' => array(
            'Text',
            array(
                'Comment' => 'поле для ссылок',
                'Not_Null'
            )
        ),
        'linkText1' => array(
            'Text',
            array(
                'Comment' => 'поле для ссылок',
                'Not_Null'
            )
        ),
        'linkText2' => array(
            'Text',
            array(
                'Comment' => 'поле для ссылок',
                'Not_Null'
            )
        ),
        'linkText3' => array(
            'Text',
            array(
                'Comment' => 'поле для ссылок',
                'Not_Null'
            )
        )
    ),
    'indexes' => array(
        'id' => array(
            'Primary',
            array(
                'id'
            )
        ),
        'table_rowId' => array(
            'Key',
            array(
                'table'
            )
        ),
        'mainIndex_index_index_index' => array(
            'Key',
            array(
                'active'
            )        
        )        
    )
);