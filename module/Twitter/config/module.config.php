<?php

return array(

    'router' => array(
        'routes' => array(
            'post' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/getPostsByHashtag/:hashtag',
                    'defaults' => array(
                        'controller' => 'Twitter\Controller\Twitter',
                        'action'     => 'getPostsByHashtag',
                    )
                )
            )
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