<?php

namespace ContainerS4kf1zl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X2KdwbvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X2Kdwbv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X2Kdwbv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'publication' => ['privates', '.errored..service_locator.X2Kdwbv.App\\Entity\\Publication', NULL, 'Cannot autowire service ".service_locator.X2Kdwbv": it references class "App\\Entity\\Publication" but no such service exists.'],
            'publicationRepository' => ['privates', 'App\\Repository\\PublicationRepository', 'getPublicationRepositoryService', true],
        ], [
            'publication' => 'App\\Entity\\Publication',
            'publicationRepository' => 'App\\Repository\\PublicationRepository',
        ]);
    }
}
