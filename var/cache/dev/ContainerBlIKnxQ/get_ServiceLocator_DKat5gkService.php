<?php

namespace ContainerBlIKnxQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DKat5gkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dKat5gk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dKat5gk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentaireRepository' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService', true],
            'publication' => ['privates', '.errored..service_locator.dKat5gk.App\\Entity\\Publication', NULL, 'Cannot autowire service ".service_locator.dKat5gk": it references class "App\\Entity\\Publication" but no such service exists.'],
        ], [
            'commentaireRepository' => 'App\\Repository\\CommentaireRepository',
            'publication' => 'App\\Entity\\Publication',
        ]);
    }
}
