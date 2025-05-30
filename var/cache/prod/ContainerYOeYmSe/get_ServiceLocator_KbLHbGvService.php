<?php

namespace ContainerYOeYmSe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KbLHbGvService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private '.service_locator.KbLHbGv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KbLHbGv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\Admin\\AdminController::dashboard' => ['privates', '.service_locator.hGnnpIW.App\\Controller\\Admin\\AdminController::dashboard()', 'getAdminControllerdashboardService', true],
            'App\\Controller\\Admin\\AdminController::products' => ['privates', '.service_locator.vCPEyuw.App\\Controller\\Admin\\AdminController::products()', 'getAdminControllerproductsService', true],
            'App\\Controller\\Admin\\AdminController::newProduct' => ['privates', '.service_locator.egipcEH.App\\Controller\\Admin\\AdminController::newProduct()', 'getAdminControllernewProductService', true],
            'App\\Controller\\Admin\\AdminController::editProduct' => ['privates', '.service_locator.MFPVaGP.App\\Controller\\Admin\\AdminController::editProduct()', 'getAdminControllereditProductService', true],
            'App\\Controller\\Admin\\AdminController::deleteProduct' => ['privates', '.service_locator.MFPVaGP.App\\Controller\\Admin\\AdminController::deleteProduct()', 'getAdminControllerdeleteProductService', true],
            'App\\Controller\\Admin\\AdminController::categories' => ['privates', '.service_locator.MTCWnA5.App\\Controller\\Admin\\AdminController::categories()', 'getAdminControllercategoriesService', true],
            'App\\Controller\\Admin\\AdminController::newCategory' => ['privates', '.service_locator.egipcEH.App\\Controller\\Admin\\AdminController::newCategory()', 'getAdminControllernewCategoryService', true],
            'App\\Controller\\Admin\\AdminController::editCategory' => ['privates', '.service_locator.gADJ5td.App\\Controller\\Admin\\AdminController::editCategory()', 'getAdminControllereditCategoryService', true],
            'App\\Controller\\Admin\\AdminController::deleteCategory' => ['privates', '.service_locator.gADJ5td.App\\Controller\\Admin\\AdminController::deleteCategory()', 'getAdminControllerdeleteCategoryService', true],
            'App\\Controller\\Admin\\AdminController::orders' => ['privates', '.service_locator.4cMiwZx', 'get_ServiceLocator_4cMiwZxService', true],
            'App\\Controller\\Admin\\AdminController::showOrder' => ['privates', '.service_locator.KyJldkg.App\\Controller\\Admin\\AdminController::showOrder()', 'getAdminControllershowOrderService', true],
            'App\\Controller\\Admin\\AdminController::updateOrderStatus' => ['privates', '.service_locator.LEf9U9t.App\\Controller\\Admin\\AdminController::updateOrderStatus()', 'getAdminControllerupdateOrderStatusService', true],
            'App\\Controller\\CheckoutController::index' => ['privates', '.service_locator.U.6BHlN.App\\Controller\\CheckoutController::index()', 'getCheckoutControllerindexService', true],
            'App\\Controller\\CheckoutController::success' => ['privates', '.service_locator.KyJldkg.App\\Controller\\CheckoutController::success()', 'getCheckoutControllersuccessService', true],
            'App\\Controller\\GoogleController::connectAction' => ['privates', '.service_locator.wLvy5Az.App\\Controller\\GoogleController::connectAction()', 'getGoogleControllerconnectActionService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.iXj7DpL.App\\Controller\\HomeController::index()', 'getHomeControllerindexService', true],
            'App\\Controller\\PasswordDebugController::testPassword' => ['privates', '.service_locator.A84gqGd.App\\Controller\\PasswordDebugController::testPassword()', 'getPasswordDebugControllertestPasswordService', true],
            'App\\Controller\\PasswordDebugController::testAuth' => ['privates', '.service_locator.03VYXLr.App\\Controller\\PasswordDebugController::testAuth()', 'getPasswordDebugControllertestAuthService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.iXj7DpL.App\\Controller\\ProductController::index()', 'getProductControllerindexService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.GwIh.sb.App\\Controller\\ProductController::show()', 'getProductControllershowService', true],
            'App\\Controller\\ProductController::serveImage' => ['privates', '.service_locator.GwIh.sb.App\\Controller\\ProductController::serveImage()', 'getProductControllerserveImageService', true],
            'App\\Controller\\ProfileController::edit' => ['privates', '.service_locator.A84gqGd.App\\Controller\\ProfileController::edit()', 'getProfileControllereditService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.HIHfcNa.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\ReviewController::addReview' => ['privates', '.service_locator.MFPVaGP.App\\Controller\\ReviewController::addReview()', 'getReviewControlleraddReviewService', true],
            'App\\Controller\\SearchController::index' => ['privates', '.service_locator.vCPEyuw.App\\Controller\\SearchController::index()', 'getSearchControllerindexService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.YiW4aOy.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\Admin\\AdminController:dashboard' => ['privates', '.service_locator.hGnnpIW.App\\Controller\\Admin\\AdminController::dashboard()', 'getAdminControllerdashboardService', true],
            'App\\Controller\\Admin\\AdminController:products' => ['privates', '.service_locator.vCPEyuw.App\\Controller\\Admin\\AdminController::products()', 'getAdminControllerproductsService', true],
            'App\\Controller\\Admin\\AdminController:newProduct' => ['privates', '.service_locator.egipcEH.App\\Controller\\Admin\\AdminController::newProduct()', 'getAdminControllernewProductService', true],
            'App\\Controller\\Admin\\AdminController:editProduct' => ['privates', '.service_locator.MFPVaGP.App\\Controller\\Admin\\AdminController::editProduct()', 'getAdminControllereditProductService', true],
            'App\\Controller\\Admin\\AdminController:deleteProduct' => ['privates', '.service_locator.MFPVaGP.App\\Controller\\Admin\\AdminController::deleteProduct()', 'getAdminControllerdeleteProductService', true],
            'App\\Controller\\Admin\\AdminController:categories' => ['privates', '.service_locator.MTCWnA5.App\\Controller\\Admin\\AdminController::categories()', 'getAdminControllercategoriesService', true],
            'App\\Controller\\Admin\\AdminController:newCategory' => ['privates', '.service_locator.egipcEH.App\\Controller\\Admin\\AdminController::newCategory()', 'getAdminControllernewCategoryService', true],
            'App\\Controller\\Admin\\AdminController:editCategory' => ['privates', '.service_locator.gADJ5td.App\\Controller\\Admin\\AdminController::editCategory()', 'getAdminControllereditCategoryService', true],
            'App\\Controller\\Admin\\AdminController:deleteCategory' => ['privates', '.service_locator.gADJ5td.App\\Controller\\Admin\\AdminController::deleteCategory()', 'getAdminControllerdeleteCategoryService', true],
            'App\\Controller\\Admin\\AdminController:orders' => ['privates', '.service_locator.4cMiwZx', 'get_ServiceLocator_4cMiwZxService', true],
            'App\\Controller\\Admin\\AdminController:showOrder' => ['privates', '.service_locator.KyJldkg.App\\Controller\\Admin\\AdminController::showOrder()', 'getAdminControllershowOrderService', true],
            'App\\Controller\\Admin\\AdminController:updateOrderStatus' => ['privates', '.service_locator.LEf9U9t.App\\Controller\\Admin\\AdminController::updateOrderStatus()', 'getAdminControllerupdateOrderStatusService', true],
            'App\\Controller\\CheckoutController:index' => ['privates', '.service_locator.U.6BHlN.App\\Controller\\CheckoutController::index()', 'getCheckoutControllerindexService', true],
            'App\\Controller\\CheckoutController:success' => ['privates', '.service_locator.KyJldkg.App\\Controller\\CheckoutController::success()', 'getCheckoutControllersuccessService', true],
            'App\\Controller\\GoogleController:connectAction' => ['privates', '.service_locator.wLvy5Az.App\\Controller\\GoogleController::connectAction()', 'getGoogleControllerconnectActionService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.iXj7DpL.App\\Controller\\HomeController::index()', 'getHomeControllerindexService', true],
            'App\\Controller\\PasswordDebugController:testPassword' => ['privates', '.service_locator.A84gqGd.App\\Controller\\PasswordDebugController::testPassword()', 'getPasswordDebugControllertestPasswordService', true],
            'App\\Controller\\PasswordDebugController:testAuth' => ['privates', '.service_locator.03VYXLr.App\\Controller\\PasswordDebugController::testAuth()', 'getPasswordDebugControllertestAuthService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.iXj7DpL.App\\Controller\\ProductController::index()', 'getProductControllerindexService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.GwIh.sb.App\\Controller\\ProductController::show()', 'getProductControllershowService', true],
            'App\\Controller\\ProductController:serveImage' => ['privates', '.service_locator.GwIh.sb.App\\Controller\\ProductController::serveImage()', 'getProductControllerserveImageService', true],
            'App\\Controller\\ProfileController:edit' => ['privates', '.service_locator.A84gqGd.App\\Controller\\ProfileController::edit()', 'getProfileControllereditService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.HIHfcNa.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\ReviewController:addReview' => ['privates', '.service_locator.MFPVaGP.App\\Controller\\ReviewController::addReview()', 'getReviewControlleraddReviewService', true],
            'App\\Controller\\SearchController:index' => ['privates', '.service_locator.vCPEyuw.App\\Controller\\SearchController::index()', 'getSearchControllerindexService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.YiW4aOy.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\Admin\\AdminController::dashboard' => '?',
            'App\\Controller\\Admin\\AdminController::products' => '?',
            'App\\Controller\\Admin\\AdminController::newProduct' => '?',
            'App\\Controller\\Admin\\AdminController::editProduct' => '?',
            'App\\Controller\\Admin\\AdminController::deleteProduct' => '?',
            'App\\Controller\\Admin\\AdminController::categories' => '?',
            'App\\Controller\\Admin\\AdminController::newCategory' => '?',
            'App\\Controller\\Admin\\AdminController::editCategory' => '?',
            'App\\Controller\\Admin\\AdminController::deleteCategory' => '?',
            'App\\Controller\\Admin\\AdminController::orders' => '?',
            'App\\Controller\\Admin\\AdminController::showOrder' => '?',
            'App\\Controller\\Admin\\AdminController::updateOrderStatus' => '?',
            'App\\Controller\\CheckoutController::index' => '?',
            'App\\Controller\\CheckoutController::success' => '?',
            'App\\Controller\\GoogleController::connectAction' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\PasswordDebugController::testPassword' => '?',
            'App\\Controller\\PasswordDebugController::testAuth' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Controller\\ProductController::serveImage' => '?',
            'App\\Controller\\ProfileController::edit' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ReviewController::addReview' => '?',
            'App\\Controller\\SearchController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\Admin\\AdminController:dashboard' => '?',
            'App\\Controller\\Admin\\AdminController:products' => '?',
            'App\\Controller\\Admin\\AdminController:newProduct' => '?',
            'App\\Controller\\Admin\\AdminController:editProduct' => '?',
            'App\\Controller\\Admin\\AdminController:deleteProduct' => '?',
            'App\\Controller\\Admin\\AdminController:categories' => '?',
            'App\\Controller\\Admin\\AdminController:newCategory' => '?',
            'App\\Controller\\Admin\\AdminController:editCategory' => '?',
            'App\\Controller\\Admin\\AdminController:deleteCategory' => '?',
            'App\\Controller\\Admin\\AdminController:orders' => '?',
            'App\\Controller\\Admin\\AdminController:showOrder' => '?',
            'App\\Controller\\Admin\\AdminController:updateOrderStatus' => '?',
            'App\\Controller\\CheckoutController:index' => '?',
            'App\\Controller\\CheckoutController:success' => '?',
            'App\\Controller\\GoogleController:connectAction' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\PasswordDebugController:testPassword' => '?',
            'App\\Controller\\PasswordDebugController:testAuth' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'App\\Controller\\ProductController:serveImage' => '?',
            'App\\Controller\\ProfileController:edit' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ReviewController:addReview' => '?',
            'App\\Controller\\SearchController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
        ]);
    }
}
