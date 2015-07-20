<?php

return array(

    'router' => array(
        'routes' => array(

            'get-statuses-by-keyword' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/getStatusesByKeyword/:keyword',
                    'defaults' => array(
                        'controller' => 'Twitter\Controller\Twitter',
                        'action'     => 'getStatusesByKeyword',
                    )
                )
            ),

            'get-recent-statuses-by-keyword' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/getRecentStatusesByKeyword/:keyword',
                    'defaults' => array(
                        'controller' => 'Twitter\Controller\Twitter',
                        'action'     => 'getRecentStatusesByKeyword',
                    )
                )
            ),

            'get-users-info-by-keyword' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/getUsersInfoByKeyword/:keyword',
                    'defaults' => array(
                        'controller' => 'Twitter\Controller\Twitter',
                        'action'     => 'getUsersInfoByKeyword',
                    )
                )
            ),

        )
    ),

    'service_manager' => array(
        'invokables' => array(
            'Twitter\Service\TwitterService' => 'Twitter\Service\TwitterService'
        )
    ),

    'controllers' => array(
        'factories' => array(
            'Twitter\Controller\Twitter' => 'Twitter\Factory\TwitterControllerFactory'
        )
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);