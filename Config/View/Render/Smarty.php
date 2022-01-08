<?php

/**
 * Конфиг для рендера смарти
 *
 * @var array
 */
return array(
    /**
     * Пути до плагинов
     *
     * @var array
     */
    'pluginsPath' => array(
        IcEngine::root() . 'Ice/Vendor/smarty_plugins',
        IcEngine::path() . 'Vendor/smarty_plugins',
        IcEngine::path() . 'Vendor/smarty3/plugins'
    ),
    /**
     * Пути до шаблонов
     *
     * @var array
     */
    'templatesPath' => array(
        IcEngine::path() . 'View/',
        IcEngine::root() . 'Ice/View/'
    ),
    /**
     * Путь до директории компиляции шаблонов
     *
     * @var string
     */
    'compilePath' => IcEngine::root() . 'cache/templates/'
);