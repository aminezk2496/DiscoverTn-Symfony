<?php

namespace ContainerFI46xvA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WTJrv9IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WTJrv9I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WTJrv9I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'randonneeRepository' => ['privates', 'App\\Repository\\RandonneeRepository', 'getRandonneeRepositoryService', true],
        ], [
            'randonneeRepository' => 'App\\Repository\\RandonneeRepository',
        ]);
    }
}
