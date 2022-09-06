<?php

namespace Container3paxl6f;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KsprajgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ksprajg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ksprajg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoriesRepository' => ['privates', 'App\\Repository\\CategoriesRepository', 'getCategoriesRepositoryService', true],
        ], [
            'categoriesRepository' => 'App\\Repository\\CategoriesRepository',
        ]);
    }
}
