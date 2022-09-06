<?php

namespace ContainerLllwzZ9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M_XfFsQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M.xfFsQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M.xfFsQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'operateursRepository' => ['privates', 'App\\Repository\\OperateursRepository', 'getOperateursRepositoryService', true],
        ], [
            'operateursRepository' => 'App\\Repository\\OperateursRepository',
        ]);
    }
}
