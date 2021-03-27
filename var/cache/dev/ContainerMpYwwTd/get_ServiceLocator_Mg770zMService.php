<?php

namespace ContainerMpYwwTd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mg770zMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Mg770zM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Mg770zM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'recettesRepository' => ['privates', 'App\\Repository\\RecettesRepository', 'getRecettesRepositoryService', true],
        ], [
            'recettesRepository' => 'App\\Repository\\RecettesRepository',
        ]);
    }
}
