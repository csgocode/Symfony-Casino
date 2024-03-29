<?php

namespace ContainerZ4HuoOx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J0xCMlWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j0xCMlW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j0xCMlW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'afiliadosRepository' => ['privates', 'App\\Repository\\AfiliadosRepository', 'getAfiliadosRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'afiliadosRepository' => 'App\\Repository\\AfiliadosRepository',
            'doctrine' => '?',
        ]);
    }
}
