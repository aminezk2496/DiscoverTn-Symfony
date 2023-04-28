<?php

namespace ContainerA2HV3Ho;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9JQpM2tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9JQpM2t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9JQpM2t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ReclamationController::destroy_reclam' => ['privates', '.service_locator.bvmeD74', 'get_ServiceLocator_BvmeD74Service', true],
            'App\\Controller\\ReclamationController::display_reclamation' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\ReclamationController::reply_reclam' => ['privates', '.service_locator.ff7a1x0', 'get_ServiceLocator_Ff7a1x0Service', true],
            'App\\Controller\\UtilisateurController::AddUser' => ['privates', '.service_locator.ff7a1x0', 'get_ServiceLocator_Ff7a1x0Service', true],
            'App\\Controller\\UtilisateurController::dropuser' => ['privates', '.service_locator._chApKR', 'get_ServiceLocator_ChApKRService', true],
            'App\\Controller\\UtilisateurController::generatePdfPersonne' => ['privates', '.service_locator.4jO8SEd', 'get_ServiceLocator_4jO8SEdService', true],
            'App\\Controller\\UtilisateurController::index' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\UtilisateurController::indexFront' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\UtilisateurController::login' => ['privates', '.service_locator.ff7a1x0', 'get_ServiceLocator_Ff7a1x0Service', true],
            'App\\Controller\\UtilisateurController::rankup' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\UtilisateurController::resetpassword' => ['privates', '.service_locator.ff7a1x0', 'get_ServiceLocator_Ff7a1x0Service', true],
            'App\\Controller\\UtilisateurController::shownoadmins' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\UtilisateurController::signup' => ['privates', '.service_locator.ff7a1x0', 'get_ServiceLocator_Ff7a1x0Service', true],
            'App\\Controller\\UtilisateurController::userUpdate' => ['privates', '.service_locator.JMejbpE', 'get_ServiceLocator_JMejbpEService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ReclamationController:destroy_reclam' => ['privates', '.service_locator.bvmeD74', 'get_ServiceLocator_BvmeD74Service', true],
            'App\\Controller\\ReclamationController:display_reclamation' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\ReclamationController:reply_reclam' => ['privates', '.service_locator.ff7a1x0', 'get_ServiceLocator_Ff7a1x0Service', true],
            'App\\Controller\\UtilisateurController:AddUser' => ['privates', '.service_locator.ff7a1x0', 'get_ServiceLocator_Ff7a1x0Service', true],
            'App\\Controller\\UtilisateurController:dropuser' => ['privates', '.service_locator._chApKR', 'get_ServiceLocator_ChApKRService', true],
            'App\\Controller\\UtilisateurController:generatePdfPersonne' => ['privates', '.service_locator.4jO8SEd', 'get_ServiceLocator_4jO8SEdService', true],
            'App\\Controller\\UtilisateurController:index' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\UtilisateurController:indexFront' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\UtilisateurController:login' => ['privates', '.service_locator.ff7a1x0', 'get_ServiceLocator_Ff7a1x0Service', true],
            'App\\Controller\\UtilisateurController:rankup' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\UtilisateurController:resetpassword' => ['privates', '.service_locator.ff7a1x0', 'get_ServiceLocator_Ff7a1x0Service', true],
            'App\\Controller\\UtilisateurController:shownoadmins' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\UtilisateurController:signup' => ['privates', '.service_locator.ff7a1x0', 'get_ServiceLocator_Ff7a1x0Service', true],
            'App\\Controller\\UtilisateurController:userUpdate' => ['privates', '.service_locator.JMejbpE', 'get_ServiceLocator_JMejbpEService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ReclamationController::destroy_reclam' => '?',
            'App\\Controller\\ReclamationController::display_reclamation' => '?',
            'App\\Controller\\ReclamationController::reply_reclam' => '?',
            'App\\Controller\\UtilisateurController::AddUser' => '?',
            'App\\Controller\\UtilisateurController::dropuser' => '?',
            'App\\Controller\\UtilisateurController::generatePdfPersonne' => '?',
            'App\\Controller\\UtilisateurController::index' => '?',
            'App\\Controller\\UtilisateurController::indexFront' => '?',
            'App\\Controller\\UtilisateurController::login' => '?',
            'App\\Controller\\UtilisateurController::rankup' => '?',
            'App\\Controller\\UtilisateurController::resetpassword' => '?',
            'App\\Controller\\UtilisateurController::shownoadmins' => '?',
            'App\\Controller\\UtilisateurController::signup' => '?',
            'App\\Controller\\UtilisateurController::userUpdate' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ReclamationController:destroy_reclam' => '?',
            'App\\Controller\\ReclamationController:display_reclamation' => '?',
            'App\\Controller\\ReclamationController:reply_reclam' => '?',
            'App\\Controller\\UtilisateurController:AddUser' => '?',
            'App\\Controller\\UtilisateurController:dropuser' => '?',
            'App\\Controller\\UtilisateurController:generatePdfPersonne' => '?',
            'App\\Controller\\UtilisateurController:index' => '?',
            'App\\Controller\\UtilisateurController:indexFront' => '?',
            'App\\Controller\\UtilisateurController:login' => '?',
            'App\\Controller\\UtilisateurController:rankup' => '?',
            'App\\Controller\\UtilisateurController:resetpassword' => '?',
            'App\\Controller\\UtilisateurController:shownoadmins' => '?',
            'App\\Controller\\UtilisateurController:signup' => '?',
            'App\\Controller\\UtilisateurController:userUpdate' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
