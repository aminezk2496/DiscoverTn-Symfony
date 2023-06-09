<?php

namespace Container4aOWDis;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4jO8SEdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4jO8SEd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4jO8SEd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pdf' => ['privates', 'App\\Service\\pdfService', 'getPdfServiceService', true],
        ], [
            'pdf' => 'App\\Service\\pdfService',
        ]);
    }
}
