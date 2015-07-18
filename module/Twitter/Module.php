<?php

namespace Twitter;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Twitter\Service\TwitterService;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{
	public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                )
            )
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Twitter\Service\Twitter' =>  function($sm) {
                    $config = $sm->get('Config');
                    $twitter_config = $config['social_media_api']['twitter_api'];

                    return new TwitterService($twitter_config);
                },

            ),
        );
    }
}