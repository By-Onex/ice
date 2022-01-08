<?php

return array(
    'comment' => 'Социальные пользователи',
    'author' => 'denis.d',
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 10,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'User__id' => array(
            'Int',
            array(
                'Size' => 10,    
                'Comment' => 'ID основного профиля',    
                'Not_Null'
            )    
        ),
        'identity' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Уникальный идентификатор авторизовавшегося пользователя. Значение представлено в виде URL.'    
            )    
        ),
        'provider' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Обозначение провайдера, через который прошла авторизация.'    
            )    
        ),
        'uid' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Идентификатор пользователя, используемый на стороне провайдера.'    
            )    
        ),
        'nickname' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Ник пользователи или его логин.'    
            )    
        ),
        'email' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Адрес электронной почты.'    
            )    
        ),
        'gender' => array(
            'Varchar',
            array(
                'Size' => 2,    
                'Comment' => 'Пол пользователя. Возможные значения: M, F. Соответственно, мужской и женский.'    
            )    
        ),
        'photo' => array(
            'Varchar',
            array(
                'Size' => 80,    
                'Comment' => 'URL-адрес на файл аватарки. Ширина и высота изображения, для различных провайдеров, могут отличаться.'    
            )    
        ),
        'fullName' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Имя и фамилия пользователя'    
            )    
        ),
        'firstName' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Имя'    
            )    
        ),
        'lastName' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Фамилия'    
            )    
        ),
        'name_middle_name' => array(
            'Varchar',
            array(
                'Size' => 30,    
                'Comment' => 'Отчество'    
            )    
        ),
        'dob' => array(
            'Date',
            array(
                'Comment' => 'Дата рождения'    
            )    
        ),
        'work_company' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Название компании.'    
            )    
        ),
        'work_job' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Профессия и должность.'    
            )    
        ),
        'address_home_country' => array(
            'Varchar',
            array(
                'Size' => 30,    
                'Comment' => 'Массив с данными о домашнем адресе'    
            )    
        ),
        'address_home_postal_code' => array(
            'Varchar',
            array(
                'Size' => 10,    
                'Comment' => 'Массив с данными о домашнем адресе'    
            )    
        ),
        'address_home_state' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Массив с данными о домашнем адресе'    
            )    
        ),
        'address_home_city' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Массив с данными о домашнем адресе'    
            )    
        ),
        'address_home_street_address' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Массив с данными о домашнем адресе'    
            )    
        ),
        'address_business_country' => array(
            'Varchar',
            array(
                'Size' => 30,    
                'Comment' => 'Массив с данными о рабочем адресе'    
            )    
        ),
        'address_business_postal_code' => array(
            'Varchar',
            array(
                'Size' => 10,    
                'Comment' => 'Массив с данными о рабочем адресе'    
            )    
        ),
        'address_business_state' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Массив с данными о рабочем адресе'    
            )    
        ),
        'address_business_city' => array(
            'Varchar',
            array(
                'Size' => 50,    
                'Comment' => 'Массив с данными о рабочем адресе'    
            )    
        ),
        'address_business_street_address' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Массив с данными о рабочем адресе'    
            )    
        ),
        'phone_preferred' => array(
            'Varchar',
            array(
                'Size' => 15,    
                'Comment' => 'Номер телефона указанный по умолчанию.'    
            )    
        ),
        'phone_home' => array(
            'Varchar',
            array(
                'Size' => 15,    
                'Comment' => 'Домашний телефон.'    
            )    
        ),
        'phone_work' => array(
            'Varchar',
            array(
                'Size' => 15,    
                'Comment' => 'Рабочий телефон.'    
            )    
        ),
        'phone_mobile' => array(
            'Varchar',
            array(
                'Size' => 15,    
                'Comment' => 'Мобильный телефон.'    
            )    
        ),
        'phone_fax' => array(
            'Varchar',
            array(
                'Size' => 15,    
                'Comment' => 'Факс'    
            )    
        ),
        'im_icq' => array(
            'Varchar',
            array(
                'Size' => 10,    
                'Comment' => 'ICQ'    
            )    
        ),
        'im_jabber' => array(
            'Varchar',
            array(
                'Size' => 10,    
                'Comment' => 'Jabber'    
            )    
        ),
        'im_skype' => array(
            'Varchar',
            array(
                'Size' => 30,    
                'Comment' => 'Skype'    
            )    
        ),
        'web_default' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'Адрес профиля или персональной страницы.'    
            )    
        ),
        'web_blog' => array(
            'Varchar',
            array(
                'Size' => 100,    
                'Comment' => 'blog'    
            )    
        ),
        'language' => array(
            'Varchar',
            array(
                'Size' => 10,    
                'Comment' => 'Язык'    
            )    
        ),
        'timezone' => array(
            'Varchar',
            array(
                'Size' => 10,    
                'Comment' => 'Временная зона.'    
            )    
        ),
        'biography' => array(
            'Varchar',
            array(
                'Size' => 200,    
                'Comment' => 'Другая информация о пользователе и его интересах.'    
            )    
        ),
        'show_on_my_page' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Default' => 1,    
                'Comment' => 'Показывать на личной странице( по умолчанию показывать)',    
                'Not_Null'
            )    
        ),
        'createdAt' => array(
            'Date',
            array(
                'Default' => '0000-00-00',    
                'Comment' => 'Дата создания записи',    
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
        'identity_provider_uid' => array(
            'Unique',
            array(
                'identity'        
            )        
        )        
    )
);