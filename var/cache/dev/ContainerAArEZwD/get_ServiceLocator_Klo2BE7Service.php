<?php

namespace ContainerAArEZwD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Klo2BE7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Klo2BE7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Klo2BE7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'camping' => ['privates', '.errored..service_locator.Klo2BE7.App\\Entity\\Camping', NULL, 'Cannot autowire service ".service_locator.Klo2BE7": it references class "App\\Entity\\Camping" but no such service exists.'],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingRepository', 'getRatingRepositoryService', true],
        ], [
            'camping' => 'App\\Entity\\Camping',
            'ratingRepository' => 'App\\Repository\\RatingRepository',
        ]);
    }
}
