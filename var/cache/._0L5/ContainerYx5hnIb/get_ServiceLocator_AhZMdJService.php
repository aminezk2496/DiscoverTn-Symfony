<?php

namespace ContainerYx5hnIb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AhZMdJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AhZMd_J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AhZMd_J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'publication' => ['privates', '.errored..service_locator.AhZMd_J.App\\Entity\\Publication', NULL, 'Cannot autowire service ".service_locator.AhZMd_J": it references class "App\\Entity\\Publication" but no such service exists.'],
        ], [
            'publication' => 'App\\Entity\\Publication',
        ]);
    }
}
