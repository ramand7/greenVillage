<?php

namespace ContainerPakFAxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8IzX0f9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8IzX0f9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8IzX0f9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.8IzX0f9.App\\Entity\\Categories', NULL, 'Cannot autowire service ".service_locator.8IzX0f9": it needs an instance of "App\\Entity\\Categories" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'category' => 'App\\Entity\\Categories',
            'entityManager' => '?',
        ]);
    }
}
