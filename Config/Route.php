<?php
return array(
    'routes' => array(
        array(
            'route'          => '/',
            'weight'          => 1000,
            'host'          => '',
            'actions'          => array(
                'Main/index'
            ),
            'params'          => array()
        ),
        array(
            'route'   => '/pages',
            'actions' => array('Page/index'),
            'params'  => array(),
            'weight'  => 1000,
        ),
        array(
            'route' => '/pages/testAjax',
            'actions' => array('Page/testAjax'),
            'weight'          => 110,
            'params' => array()
        ),
        array(
            'route' => '/pages/{$userId}',
            'actions' => array('Page/roll'),
            'params' => array(),
            'patterns'          => array(
                'userId'   =>     array(
                    'pattern'    => '([0-9]+)',
                ),
            ),
            'weight'          => 100,
        ),

        'ajaxPage'   => array(
            'route'          => '/Controller/ajax/',
            'weight'          => 10,
            'host'          => '',
            'actions'          => array(
                'Controller/ajax'
            ),
            'params'          => array(
                'viewRender'   => 'JsHttpRequest'
            )
        ),
        'params'  => array()
    )
);
