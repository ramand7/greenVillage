<?php

namespace ContainerPakFAxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Tepo4i9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Tepo4i9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Tepo4i9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::deleteCat' => ['privates', '.service_locator.8IzX0f9', 'get_ServiceLocator_8IzX0f9Service', true],
            'App\\Controller\\AdminController::deleteProd' => ['privates', '.service_locator.Gl3nBvd', 'get_ServiceLocator_Gl3nBvdService', true],
            'App\\Controller\\AdminController::editCat' => ['privates', '.service_locator.vBGnsRU', 'get_ServiceLocator_VBGnsRUService', true],
            'App\\Controller\\AdminController::editProd' => ['privates', '.service_locator.Gl3nBvd', 'get_ServiceLocator_Gl3nBvdService', true],
            'App\\Controller\\AdminController::indexCat' => ['privates', '.service_locator.do9sDn8', 'get_ServiceLocator_Do9sDn8Service', true],
            'App\\Controller\\AdminController::indexProduit' => ['privates', '.service_locator.vRUAr7Q', 'get_ServiceLocator_VRUAr7QService', true],
            'App\\Controller\\AdminController::newCat' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::newProd' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::show' => ['privates', '.service_locator.vRUAr7Q', 'get_ServiceLocator_VRUAr7QService', true],
            'App\\Controller\\AdminController::showBySlug' => ['privates', '.service_locator.do9sDn8', 'get_ServiceLocator_Do9sDn8Service', true],
            'App\\Controller\\AdminController::showCat' => ['privates', '.service_locator.do9sDn8', 'get_ServiceLocator_Do9sDn8Service', true],
            'App\\Controller\\Admin\\CategoriesController::index' => ['privates', '.service_locator.do9sDn8', 'get_ServiceLocator_Do9sDn8Service', true],
            'App\\Controller\\Admin\\ProduitController::index' => ['privates', '.service_locator.vRUAr7Q', 'get_ServiceLocator_VRUAr7QService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.Z9QmIxH', 'get_ServiceLocator_Z9QmIxHService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:deleteCat' => ['privates', '.service_locator.8IzX0f9', 'get_ServiceLocator_8IzX0f9Service', true],
            'App\\Controller\\AdminController:deleteProd' => ['privates', '.service_locator.Gl3nBvd', 'get_ServiceLocator_Gl3nBvdService', true],
            'App\\Controller\\AdminController:editCat' => ['privates', '.service_locator.vBGnsRU', 'get_ServiceLocator_VBGnsRUService', true],
            'App\\Controller\\AdminController:editProd' => ['privates', '.service_locator.Gl3nBvd', 'get_ServiceLocator_Gl3nBvdService', true],
            'App\\Controller\\AdminController:indexCat' => ['privates', '.service_locator.do9sDn8', 'get_ServiceLocator_Do9sDn8Service', true],
            'App\\Controller\\AdminController:indexProduit' => ['privates', '.service_locator.vRUAr7Q', 'get_ServiceLocator_VRUAr7QService', true],
            'App\\Controller\\AdminController:newCat' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:newProd' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:show' => ['privates', '.service_locator.vRUAr7Q', 'get_ServiceLocator_VRUAr7QService', true],
            'App\\Controller\\AdminController:showBySlug' => ['privates', '.service_locator.do9sDn8', 'get_ServiceLocator_Do9sDn8Service', true],
            'App\\Controller\\AdminController:showCat' => ['privates', '.service_locator.do9sDn8', 'get_ServiceLocator_Do9sDn8Service', true],
            'App\\Controller\\Admin\\CategoriesController:index' => ['privates', '.service_locator.do9sDn8', 'get_ServiceLocator_Do9sDn8Service', true],
            'App\\Controller\\Admin\\ProduitController:index' => ['privates', '.service_locator.vRUAr7Q', 'get_ServiceLocator_VRUAr7QService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.Z9QmIxH', 'get_ServiceLocator_Z9QmIxHService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::deleteCat' => '?',
            'App\\Controller\\AdminController::deleteProd' => '?',
            'App\\Controller\\AdminController::editCat' => '?',
            'App\\Controller\\AdminController::editProd' => '?',
            'App\\Controller\\AdminController::indexCat' => '?',
            'App\\Controller\\AdminController::indexProduit' => '?',
            'App\\Controller\\AdminController::newCat' => '?',
            'App\\Controller\\AdminController::newProd' => '?',
            'App\\Controller\\AdminController::show' => '?',
            'App\\Controller\\AdminController::showBySlug' => '?',
            'App\\Controller\\AdminController::showCat' => '?',
            'App\\Controller\\Admin\\CategoriesController::index' => '?',
            'App\\Controller\\Admin\\ProduitController::index' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:deleteCat' => '?',
            'App\\Controller\\AdminController:deleteProd' => '?',
            'App\\Controller\\AdminController:editCat' => '?',
            'App\\Controller\\AdminController:editProd' => '?',
            'App\\Controller\\AdminController:indexCat' => '?',
            'App\\Controller\\AdminController:indexProduit' => '?',
            'App\\Controller\\AdminController:newCat' => '?',
            'App\\Controller\\AdminController:newProd' => '?',
            'App\\Controller\\AdminController:show' => '?',
            'App\\Controller\\AdminController:showBySlug' => '?',
            'App\\Controller\\AdminController:showCat' => '?',
            'App\\Controller\\Admin\\CategoriesController:index' => '?',
            'App\\Controller\\Admin\\ProduitController:index' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
