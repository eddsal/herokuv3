<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6s37T8TService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6s37T8T' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6s37T8T'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'voyage' => ['privates', '.errored..service_locator.6s37T8T.App\\Entity\\Voyage', NULL, 'Cannot autowire service ".service_locator.6s37T8T": it references class "App\\Entity\\Voyage" but no such service exists.'],
        ], [
            'voyage' => 'App\\Entity\\Voyage',
        ]);
    }
}
