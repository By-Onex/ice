<?php

return [
    'admin' => [
        'rowPlugins' => [
            'General' => [
                'Admin_Plugin_Wysiwyg' => [
                    'field' => 'about',
                ],
                'Admin_Plugin_Component_Image' => [
                    'title' => 'Фотография лектора',
                    'containerId' => 'LecturerPhoto',
                    'imageName' => 'LecturerPhoto',
                    'single' => '1',
                ],
                'Admin_Plugin_Link' => [
                    [
                        'title' => 'Направления курсов лектора',
                        'toModelName' => 'Course_Doctor_Category',
                        'toModelNameField' => 'title',
                    ],
                ],
            ],
        ],
    ],
    'comment' => 'Лекторы курсов',
    'author' => 'd.galdin',
    'fields' => [
        'id' => [
            'Int',
            [
                'Not_Null',
                'Auto_Increment',
            ],
        ],
        'active' => [
            'Tinyint',
            [
                'Comment' => 'Активность',
                'Not_Null',
                'Unsigned',
            ],
        ],
        'fio' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'Фамилия, имя и отчество лектора',
                'Not_Null',
            ],
        ],
        'slug' => [
            'Varchar',
            [
                'Size'    => 256,
                'Comment' => 'ЧПУ-фрагмент для url\'а',
                'Not_Null',
            ],
        ],
        'City__id' => [
            'Int',
            [
                'Comment' => 'Город лектора',
                'Not_Null',
            ],
        ],
        'obligation' => [
            'Varchar',
            [
                'Size'    => 512,
                'Comment' => 'Должность',
                'Not_Null',
            ],
        ],
        'about' => [
            'Text',
            [
                'Comment' => 'Информация о докторе',
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
