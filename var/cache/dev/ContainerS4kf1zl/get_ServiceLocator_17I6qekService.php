<?php

namespace ContainerS4kf1zl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_17I6qekService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.17I6qek' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.17I6qek'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentaire' => ['privates', '.errored..service_locator.17I6qek.App\\Entity\\Commentaire', NULL, 'Cannot autowire service ".service_locator.17I6qek": it references class "App\\Entity\\Commentaire" but no such service exists.'],
            'commentaireRepository' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService', true],
        ], [
            'commentaire' => 'App\\Entity\\Commentaire',
            'commentaireRepository' => 'App\\Repository\\CommentaireRepository',
        ]);
    }
}
