<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J4lkN1BService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j4lkN1B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j4lkN1B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activite' => ['privates', '.errored..service_locator.j4lkN1B.App\\Entity\\Activite', NULL, 'Cannot autowire service ".service_locator.j4lkN1B": it references class "App\\Entity\\Activite" but no such service exists.'],
        ], [
            'activite' => 'App\\Entity\\Activite',
        ]);
    }
}
