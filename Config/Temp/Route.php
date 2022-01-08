<?php
return array(
    'routes'        => array(
        array(
            'route'          => '/api/',
            'weight'          => 500,
            'host'          => '',
            'actions'          => array(
                'Api/index'
            ),
            'params'          => array(
                'viewRender'   => 'Json'
            )
        ),
        'restIndex'   => array(
            'route'          => '/REST/v1/{$service}/{$action}.{$viewRenderName}',
            'weight'          => 100,
            'host'          => '',
            'actions'          => array(
                'Rest/index'
            ),
            'params'          => array(
            ),
            'patterns'          => array(
                'service'   =>     array(
                    'pattern'    => '([^/]+)'
                ),
                'action'   =>     array(
                    'pattern'    => '([^/]+)'
                ),
                'viewRenderName'   =>     array(
                    'pattern'    => '(json|xml)'
                )
            )
        ),
        'restIndexById'   => array(
            'route'          => '/REST/v1/{$service}/{$action}/{$id}.{$viewRenderName}',
            'weight'          => 100,
            'host'          => '',
            'actions'          => array(
                'Rest/index'
            ),
            'params'          => array(
            ),
            'patterns'          => array(
                'service'   =>     array(
                    'pattern'    => '([^/]+)'
                ),
                'action'   =>     array(
                    'pattern'    => '([^/]+)'
                ),
                'id'   =>     array(
                    'pattern'    => '([0-9]+)'
                ),
                'viewRenderName'   =>     array(
                    'pattern'    => '(json|xml)'
                )
            )
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
        'logoutPage'   => array(
            'route'          => '/logout/',
            'weight'          => 10,
            'host'          => '',
            'actions'          => array(
                'Authorization/logout'
            ),
            'params'          => array(
            )
        ),
        'syncPage'   => array(
            'route'          => '/Controller/sync/',
            'weight'          => 10,
            'host'          => '',
            'actions'          => array(
                'Controller/sync'
            ),
            'params'          => array(
                'viewRender'   => 'Ajax'
            )
        ),
        array(
            'route'          => '/admin/staticText/{$mode}/',
            'weight'          => 10,
            'host'          => '',
            'actions'          => array(
                'Static_Text/index'
            ),
            'params'          => array(
            ),
            'patterns'          => array(
                'mode'   =>     array(
                    'pattern'    => '([a-zA-Z]+)'
                )
            )
        ),
        array(
            'route'          => '/migration/mark/get/',
            'weight'          => 0,
            'host'          => '',
            'actions'          => array(
                'Migration_Mark/get'
            ),
            'params'          => array(
            )
        ),
        array(
            'route'          => '/migration/mark/set/',
            'weight'          => 0,
            'host'          => '',
            'actions'          => array(
                'Migration_Mark/set'
            ),
            'params'          => array(
            )
        ),
        array(
            'route'          => '/migration/seq/next/',
            'weight'          => 0,
            'host'          => '',
            'actions'          => array(
                'Migration_Sequence/next'
            ),
            'params'          => array(
            )
        ),
        array(
            'route'          => '/migration/seq/status/',
            'weight'          => 0,
            'host'          => '',
            'actions'          => array(
                'Migration_Sequence/status'
            ),
            'params'          => array(
            )
        ),
        array(
            'route'          => '/migration/seq/sync/',
            'weight'          => 0,
            'host'          => '',
            'actions'          => array(
                'Migration_Sequence/sync'
            ),
            'params'          => array(
            )
        ),
        array(
            'route'          => '/test/',
            'weight'          => 0,
            'host'          => '',
            'actions'          => array(
                'Test/index'
            ),
            'params'          => array(
            )
        ),
        array(
            'route'          => '/',
            'weight'          => 0,
            'host'          => '',
            'actions'          => array(
                'Main/index'
            ),
            'params'          => array(
            )
        ),
        array(
            'route'          => '/pages',
            'weight'          => 0,
            'host'          => '',
            'actions'          => array(
                'Page/index'
            ),
            'params'          => array(
            )
        ),
        array(
            'route'          => '/pages/{$userId}',
            'weight'          => 0,
            'host'          => '',
            'actions'          => array(
                'Page/roll'
            ),
            'params'          => array(
            )
        )    )
);