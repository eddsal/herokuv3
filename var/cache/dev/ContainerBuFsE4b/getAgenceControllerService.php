<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAgenceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Agence\AgenceController' shared autowired service.
     *
     * @return \App\Controller\Agence\AgenceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Agence/AgenceController.php';

        $container->services['App\\Controller\\Agence\\AgenceController'] = $instance = new \App\Controller\Agence\AgenceController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Agence\\AgenceController', $container));

        return $instance;
    }
}
