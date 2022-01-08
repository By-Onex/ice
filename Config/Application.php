<?php

/**
 * Разделитель частей имени классов.
 */
const DELIMITER_CLASS = '_';

return [
    'enginePath' => __DIR__ . '/../../IcEngine/',
    'cli' => [
        'defaultControllerAction' => 'Deploy',
        'bootstrap' => __DIR__ . '/../../Ice/Class/Bootstrap/ApplicationCli.php',
        'help' => '--h',
    ],
    'application' => [
        'bootstrap' => __DIR__ . '/../../Ice/Class/Bootstrap/Application.php',
        'timezone' => 'UTC',
        'path' => __DIR__ . '/../../',
    ],
    'log' => __DIR__ . '/../../log/',
];
