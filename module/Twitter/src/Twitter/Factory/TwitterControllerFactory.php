<?php
// Filename: /module/Blog/src/Blog/Factory/ListControllerFactory.php
namespace Twitter\Factory;

use Twitter\Controller\TwitterController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TwitterControllerFactory implements FactoryInterface
{
    /**
    * Create service
    *
    * @param ServiceLocatorInterface $serviceLocator
    *
    * @return mixed
    */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $twitterService     = $realServiceLocator->get('Twitter\Service\Twitter');

        return new TwitterController($twitterService);
    }
}