<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E3zdgFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e3zdg_f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e3zdg_f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tarif' => ['privates', '.errored..service_locator.e3zdg_f.App\\Entity\\Tarif', NULL, 'Cannot autowire service ".service_locator.e3zdg_f": it references class "App\\Entity\\Tarif" but no such service exists.'],
        ], [
            'tarif' => 'App\\Entity\\Tarif',
        ]);
    }
}
