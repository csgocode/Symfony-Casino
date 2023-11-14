<?php

namespace ContainerE0AibSF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolDeleteService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($container->services['cache.global_clearer'] ?? $container->load('getCache_GlobalClearerService')), [0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.messenger.restart_workers_signal', 7 => 'doctrine.result_cache_pool', 8 => 'doctrine.system_cache_pool', 9 => 'cache.property_access', 10 => 'cache.validator_expression_language', 11 => 'cache.security_expression_language', 12 => 'cache.security_token_verifier']);

        $instance->setName('cache:pool:delete');
        $instance->setDescription('Delete an item from a cache pool');

        return $instance;
    }
}
