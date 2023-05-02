<?php

namespace ContainerS4kf1zl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yr42CV7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yr42CV7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yr42CV7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'repository' => ['privates', 'App\\Repository\\PublicationRepository', 'getPublicationRepositoryService', true],
        ], [
            'mailer' => '?',
            'repository' => 'App\\Repository\\PublicationRepository',
        ]);
    }
}
