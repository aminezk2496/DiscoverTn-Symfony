<?php

namespace ContainerAArEZwD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QQ9Y688Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qQ9Y688' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qQ9Y688'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'campingRepository' => ['privates', 'App\\Repository\\CampingRepository', 'getCampingRepositoryService', true],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingRepository', 'getRatingRepositoryService', true],
        ], [
            'campingRepository' => 'App\\Repository\\CampingRepository',
            'ratingRepository' => 'App\\Repository\\RatingRepository',
        ]);
    }
}
