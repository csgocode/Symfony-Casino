<?php

namespace ContainerE0AibSF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsuarioRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\UsuarioRepository' shared autowired service.
     *
     * @return \App\Repository\UsuarioRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\UsuarioRepository'] = new \App\Repository\UsuarioRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
