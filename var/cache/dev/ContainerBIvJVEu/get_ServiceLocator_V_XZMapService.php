<?php

namespace ContainerBIvJVEu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V_XZMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v.XZMap' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v.XZMap'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'evenement' => ['privates', '.errored..service_locator.v.XZMap.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.v.XZMap": it references class "App\\Entity\\Evenement" but no such service exists.'],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'mailing' => ['services', 'App\\Controller\\MailingController', 'getMailingControllerService', true],
        ], [
            'entityManager' => '?',
            'evenement' => 'App\\Entity\\Evenement',
            'mailer' => '?',
            'mailing' => 'App\\Controller\\MailingController',
        ]);
    }
}
