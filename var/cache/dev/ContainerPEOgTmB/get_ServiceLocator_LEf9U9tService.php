<?php

namespace ContainerPEOgTmB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LEf9U9tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LEf9U9t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LEf9U9t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'order' => ['privates', '.errored..service_locator.LEf9U9t.App\\Entity\\Order', NULL, 'Cannot autowire service ".service_locator.LEf9U9t": it needs an instance of "App\\Entity\\Order" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'order' => 'App\\Entity\\Order',
            'entityManager' => '?',
        ]);
    }
}
