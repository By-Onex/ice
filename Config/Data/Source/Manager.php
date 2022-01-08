<?php
/**
 * Конфиг подключения к БД
 *
 * @author neon
 */
return [
    'sources' => [
        'default' => [
            'driver' => 'Mysqli_Cached',
            'options' => [
                'port'       => App::helperEnv()->get('DB_PORT'),
                'host'       => App::helperEnv()->get('DB_HOST'),
                'database'   => App::helperEnv()->get('DB_NAME'),
                'username'   => App::helperEnv()->get('DB_USERNAME'),
                'password'   => App::helperEnv()->get('DB_PASSWORD'),
                'charset' => 'utf8',
                'cacher' => 'mysqli_cache',
                'expiration' => 3600,
            ],
        ],
        'event_cache' => [
            'driver' => 'Provider',
            'options' => [
                'provider' => 'event_cache',
            ],
        ],
        'user_session' => [
            'driver' => 'Provider',
            'options' => [
                'provider' => 'user_session',
            ],
        ],
        'temp_content' => [
            'driver' => 'Provider',
            'options' => [
                'provider' => 'temp_content',
            ],
        ],
        'Action_Log' => [
            'driver' => 'Provider',
            'options' => [
                'provider' => 'Action_Log',
            ],
        ],
        'Sync' => [
            'driver' => 'Sync',
            'options' => [
                'staticDriver' => 'Defined',
                'dynamicDriver' => 'Mysqli_Cached',
            ],
        ],
        'Defined' => [
            'driver' => 'Defined',
            'options' => [],
        ],
    ],
];
