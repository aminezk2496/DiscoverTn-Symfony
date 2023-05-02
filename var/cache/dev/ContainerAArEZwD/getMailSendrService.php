<?php

namespace ContainerAArEZwD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailSendrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\MailSendr' shared autowired service.
     *
     * @return \App\Service\MailSendr
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'MailSendr.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\Service\\MailSendr'])) {
            return $container->privates['App\\Service\\MailSendr'];
        }

        return $container->privates['App\\Service\\MailSendr'] = new \App\Service\MailSendr($a);
    }
}
