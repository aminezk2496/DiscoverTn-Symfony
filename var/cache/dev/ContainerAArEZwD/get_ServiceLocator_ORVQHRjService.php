<?php

namespace ContainerAArEZwD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ORVQHRjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ORVQHRj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ORVQHRj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'camping' => ['privates', '.errored..service_locator.ORVQHRj.App\\Entity\\Camping', NULL, 'Cannot autowire service ".service_locator.ORVQHRj": it references class "App\\Entity\\Camping" but no such service exists.'],
        ], [
            'camping' => 'App\\Entity\\Camping',
        ]);
    }
}
