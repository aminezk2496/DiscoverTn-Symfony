<?php

namespace ContainerAArEZwD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OOPl47GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oOPl47G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oOPl47G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'camping' => ['privates', '.errored..service_locator.oOPl47G.App\\Entity\\Camping', NULL, 'Cannot autowire service ".service_locator.oOPl47G": it references class "App\\Entity\\Camping" but no such service exists.'],
            'campingRepository' => ['privates', 'App\\Repository\\CampingRepository', 'getCampingRepositoryService', true],
        ], [
            'camping' => 'App\\Entity\\Camping',
            'campingRepository' => 'App\\Repository\\CampingRepository',
        ]);
    }
}
