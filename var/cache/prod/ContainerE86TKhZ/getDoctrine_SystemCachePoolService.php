<?php

namespace ContainerE86TKhZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_SystemCachePoolService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.system_cache_pool'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ZY8dlbAjgK', 0, $container->getParameter('container.build_id'), ($container->targetDir.''.'/pools'), ($container->privates['monolog.logger.cache'] ?? $container->load('getMonolog_Logger_CacheService')));
    }
}
