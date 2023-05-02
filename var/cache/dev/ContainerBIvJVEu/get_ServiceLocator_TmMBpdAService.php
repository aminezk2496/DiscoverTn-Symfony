<?php

namespace ContainerBIvJVEu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TmMBpdAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TmMBpdA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TmMBpdA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentaire' => ['privates', '.errored..service_locator.TmMBpdA.App\\Entity\\Commentaire', NULL, 'Cannot autowire service ".service_locator.TmMBpdA": it references class "App\\Entity\\Commentaire" but no such service exists.'],
        ], [
            'commentaire' => 'App\\Entity\\Commentaire',
        ]);
    }
}
