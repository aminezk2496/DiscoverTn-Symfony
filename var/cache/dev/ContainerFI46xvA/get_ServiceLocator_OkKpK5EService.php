<?php

namespace ContainerFI46xvA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OkKpK5EService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OkKpK5E' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OkKpK5E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'randonnee' => ['privates', '.errored..service_locator.OkKpK5E.App\\Entity\\Randonnee', NULL, 'Cannot autowire service ".service_locator.OkKpK5E": it references class "App\\Entity\\Randonnee" but no such service exists.'],
            'randonneeRepository' => ['privates', 'App\\Repository\\RandonneeRepository', 'getRandonneeRepositoryService', true],
        ], [
            'randonnee' => 'App\\Entity\\Randonnee',
            'randonneeRepository' => 'App\\Repository\\RandonneeRepository',
        ]);
    }
}
