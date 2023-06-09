<?php

namespace Container3Z4LCmR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ldoq021Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ldoq021' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ldoq021'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
            'paginator' => '?',
        ]);
    }
}
