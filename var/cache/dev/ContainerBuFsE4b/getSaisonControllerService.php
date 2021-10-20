<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSaisonControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Front\SaisonController' shared autowired service.
     *
     * @return \App\Controller\Front\SaisonController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Front/SaisonController.php';

        $container->services['App\\Controller\\Front\\SaisonController'] = $instance = new \App\Controller\Front\SaisonController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Front\\SaisonController', $container));

        return $instance;
    }
}
