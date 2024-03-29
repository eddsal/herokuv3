<?php

namespace ContainerBuFsE4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JbINynUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JbINynU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JbINynU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'PaysRepository' => ['privates', 'App\\Repository\\PaysRepository', 'getPaysRepositoryService', true],
            'SaisonRepository' => ['privates', 'App\\Repository\\SaisonRepository', 'getSaisonRepositoryService', true],
            'activiteRepository' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', true],
            'voyageRepository' => ['privates', 'App\\Repository\\VoyageRepository', 'getVoyageRepositoryService', true],
        ], [
            'PaysRepository' => 'App\\Repository\\PaysRepository',
            'SaisonRepository' => 'App\\Repository\\SaisonRepository',
            'activiteRepository' => 'App\\Repository\\ActiviteRepository',
            'voyageRepository' => 'App\\Repository\\VoyageRepository',
        ]);
    }
}
