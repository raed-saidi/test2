<?php

namespace ContainerYOeYmSe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminControllershowOrderService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private '.service_locator.KyJldkg.App\Controller\Admin\AdminController::showOrder()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KyJldkg.App\\Controller\\Admin\\AdminController::showOrder()'] = ($container->privates['.service_locator.KyJldkg'] ?? $container->load('get_ServiceLocator_KyJldkgService'))->withContext('App\\Controller\\Admin\\AdminController::showOrder()', $container);
    }
}
