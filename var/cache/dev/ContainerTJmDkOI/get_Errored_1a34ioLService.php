<?php

namespace ContainerTJmDkOI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_1a34ioLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.1a34ioL' shared service.
     *
     * @return \App\Entity\Camping
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\CampingController::edit()": the $camping argument is type-hinted with the non-existent class or interface: "App\\Entity\\Camping".');
    }
}
