<?php

return [
    'comment'   => 'Vo для кэша скидок',
    'author'    => 'nastya',
    'fields'    => [
        'serviceId' => [
            'type'      => 'integer',
            'comment'   => 'Id услуги'
        ],
        'disctrictId' => [
            'type'      => 'integer',
            'comment'   => 'Id округа или района'
        ], 
        'metroId' => [
            'type'      => 'integer',
            'comment'   => 'Id метро'
        ],
        'cityId'  => [
            'type'      => 'integer',
            'comment'   => 'Id города'
        ]
    ]
];