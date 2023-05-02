<?php

namespace ContainerFI46xvA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LIZJvypService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lIZJvyp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lIZJvyp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'campingRepository' => ['privates', 'App\\Repository\\CampingRepository', 'getCampingRepositoryService', true],
            'mailingController' => ['services', 'App\\Controller\\MaillingController', 'getMaillingControllerService', true],
            'participationRepository' => ['privates', 'App\\Repository\\ParticipationsRepository', 'getParticipationsRepositoryService', true],
        ], [
            'campingRepository' => 'App\\Repository\\CampingRepository',
            'mailingController' => 'App\\Controller\\MaillingController',
            'participationRepository' => 'App\\Repository\\ParticipationsRepository',
        ]);
    }
}
