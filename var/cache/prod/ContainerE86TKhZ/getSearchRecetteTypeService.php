<?php

namespace ContainerE86TKhZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchRecetteTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\SearchRecetteType' shared autowired service.
     *
     * @return \App\Form\SearchRecetteType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\SearchRecetteType'] = new \App\Form\SearchRecetteType();
    }
}
