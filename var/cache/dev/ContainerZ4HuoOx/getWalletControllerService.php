<?php

namespace ContainerZ4HuoOx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWalletControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\WalletController' shared autowired service.
     *
     * @return \App\Controller\WalletController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/WalletController.php';

        $container->services['App\\Controller\\WalletController'] = $instance = new \App\Controller\WalletController(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\WalletController', $container));

        return $instance;
    }
}
