<?php

/**
 * Префикс ключей в редисе
 *
 * @var string
 */
$prefix = App::helperEnv()->get('DATA_PROVIDER_PREFIX');
$servers = array(
    array(
        'host' => App::helperEnv()->get('REDIS_HOST'),
        'port' => App::helperEnv()->get('REDIS_PORT'),
        'db'   => App::helperEnv()->get('REDIS_DB'),
    )
);

/**
 * @desc Конфиги провайдеров
 * @var array
 */
return array(
    // Для кэширования аннотаций
    'Annotation' => array(
        'dscr' => 'Аттрибуты',
        'provider' => 'Annotation',
        'params' => array(
            'path' => 'Ice/Var/Annotation/'
        )
    ),

    'Loader' => array(
        'provider' => 'Apc',
        'params' => array(
            'prefix' => $prefix . 'apc_l_'
        )
    ),

    'Config' => array(
        'provider' => 'Apc',
        'params' => array(
            'prefix' => $prefix . 'apc_c_'
        )
    ),

    // Для кэширования атрибутов
    'Attribute_Manager' => array(
        'dscr' => 'Аттрибуты',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'am_',
            'servers' => $servers
        )
    ),

    // Для сбора лога вызово кэширования контроллеров
    'Controller_Log' => array(
        'dscr' => 'Последние вызовы кэшера контроллеров',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'cl_',
            'servers' => $servers
        )
    ),

    // Статика
    'Static' => array(
        'dscr' => 'Статика',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'st_',
            'servers' => $servers
        )
    ),

    // Сообщения пользователей
    'Message' => array(
        'dscr' => 'Статика',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'me_',
            'servers' => $servers
        )
    ),

    /**
     * @desc Для кэширования результатов выполнения Executor
     * @var array
     */
    'executor' => array(
        'dscr' => 'Загрузчик методов',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'e_',
            'servers' => $servers,
            'tracer' => 'Null'
        )
    ),

    /**
     * @desc Провайдеры кэша для Mysqli_Cached
     * @var array
     */
    'mysqli_cache' => array(
        'dscr' => 'Кэш mysql',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'm_',
            'servers' => $servers,
            'tracer' => 'Null'
        )
    ),

    /**
     * @desc Провайдер для User_Session
     * @var array
     */
    'user_session' => array(
        'dscr' => 'Сессии пользователей',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'us_',
            'servers' => $servers,
            'tracer' => 'Null',
            'expiration' => 86400
        )
    ),

    'event_cache' => [
        'dscr' => 'Кеш событий',
        'provider' => 'Redis',
        'params' => [
            'prefix' => $prefix . 'ec_',
            'servers' => $servers,
            'tracer' => 'Null'
        ]
    ],

    'Banner_Cache' => [
        'dscr' => 'Кеш баннеров',
        'provider' => 'Redis',
        'params' => [
            'prefix' => $prefix . 'bc_',
            'servers' => $servers,
            'tracer' => 'Null'
        ]
    ],

    /**
     * @desc Провайдер для Temp_Content
     * @var array
     */
    'temp_content' => array(
        'dscr' => 'Временный контент',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'tc_',
            'servers' => $servers,
            'tracer' => 'Null'
        )
    ),

    /**
     * @desc Решенные пути роутов.
     * @var array
     */
    'Route_Cache' => array(
        'dscr' => 'Роутеры',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'rc_',
            'servers' => $servers,
            'tracer' => 'Null'
        )
    ),

    /**
     * Кэшируем блоки шаблонов
     *
     * @var array
     */
    'Block' => array(
        'dscr' => 'Блоки',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'b_',
            'servers' => $servers,
            'tracer' => 'Null'
        )
    ),


    /**
     * Кэшируем блоки шаблонов
     *
     * @var array
     */
    'Pyphrasy' => array(
        'dscr' => 'Склонятор',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'Pyp_',
            'servers' => $servers,
            'tracer' => 'Null',
            'expiration' => 86400
        )
    ),


    'Widget' => array(
        'dscr' => 'Виджеты',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix . 'wg_',
            'mget_limit' => 15,
            'servers' => array(
                array(
                    'host' => '127.0.0.1',
                )
            ),
            'tracer' => 'Null'
        )
    ),
    'Action_Log' => array(
        'dscr' => 'Кеш действий пользователей с привилегиями',
        'provider' => 'Redis',
        'params' => array(
            'prefix' => $prefix.'al_',
            'servers' => $servers,
            'tracer' => 'Null'
        )
    )
);