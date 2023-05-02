<?php

namespace ContainerAxfFexU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MzJG0hGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mzJG0hG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mzJG0hG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pub' => ['privates', '.errored..service_locator.mzJG0hG.App\\Entity\\Publication', NULL, 'Cannot autowire service ".service_locator.mzJG0hG": it references class "App\\Entity\\Publication" but no such service exists.'],
            'publicationRepository' => ['privates', 'App\\Repository\\PublicationRepository', 'getPublicationRepositoryService', true],
        ], [
            'pub' => 'App\\Entity\\Publication',
            'publicationRepository' => 'App\\Repository\\PublicationRepository',
        ]);
    }
}
