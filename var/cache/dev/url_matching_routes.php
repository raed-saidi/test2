<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminController::dashboard'], null, null, null, true, false, null]],
        '/admin/products' => [[['_route' => 'admin_products', '_controller' => 'App\\Controller\\Admin\\AdminController::products'], null, null, null, false, false, null]],
        '/admin/products/new' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\Admin\\AdminController::newProduct'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\Admin\\AdminController::categories'], null, null, null, false, false, null]],
        '/admin/categories/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\Admin\\AdminController::newCategory'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/orders' => [[['_route' => 'admin_orders', '_controller' => 'App\\Controller\\Admin\\AdminController::orders'], null, null, null, false, false, null]],
        '/checkout' => [
            [['_route' => 'checkout_index', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, true, false, null],
            [['_route' => 'checkout', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null],
        ],
        '/connect/google' => [
            [['_route' => 'connect_google', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null],
            [['_route' => 'connect_google_start', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null],
        ],
        '/search' => [[['_route' => 'search_index', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/clear' => [[['_route' => 'cart_clear', '_controller' => 'App\\Controller\\CartController::clear'], null, null, null, false, false, null]],
        '/coupon/apply' => [[['_route' => 'coupon_apply', '_controller' => 'App\\Controller\\CouponController::apply'], null, ['POST' => 0], null, false, false, null]],
        '/coupon/remove' => [[['_route' => 'coupon_remove', '_controller' => 'App\\Controller\\CouponController::remove'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/complete' => [[['_route' => 'checkout_complete', '_controller' => 'App\\Controller\\CheckoutController::complete'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/success' => [[['_route' => 'checkout_success', '_controller' => 'App\\Controller\\CheckoutController::success'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/profile/orders' => [[['_route' => 'app_profile_orders', '_controller' => 'App\\Controller\\ProfileController::orders'], null, null, null, false, false, null]],
        '/profile/settings' => [[['_route' => 'app_profile_settings', '_controller' => 'App\\Controller\\ProfileController::settings'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|products/([^/]++)/(?'
                        .'|edit(*:77)'
                        .'|delete(*:90)'
                    .')'
                    .'|categories/([^/]++)/(?'
                        .'|edit(*:125)'
                        .'|delete(*:139)'
                    .')'
                    .'|orders/([^/]++)(?'
                        .'|(*:166)'
                        .'|/status(*:181)'
                    .')'
                .')'
                .'|/debug/(?'
                    .'|password\\-test/([^/]++)/([^/]++)(*:233)'
                    .'|auth\\-test/([^/]++)/([^/]++)(*:269)'
                .')'
                .'|/product(?'
                    .'|s/(?'
                        .'|image/(\\d+)(*:305)'
                        .'|(\\d+)(*:318)'
                    .')'
                    .'|/([^/]++)/review(*:343)'
                .')'
                .'|/cart/(?'
                    .'|add/(\\d+)(*:370)'
                    .'|update/(\\d+)(*:390)'
                    .'|remove/(\\d+)(*:410)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\Admin\\AdminController::editProduct'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        90 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteProduct'], ['id'], ['POST' => 0], null, false, false, null]],
        125 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\AdminController::editCategory'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        139 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteCategory'], ['id'], ['POST' => 0], null, false, false, null]],
        166 => [[['_route' => 'admin_order_show', '_controller' => 'App\\Controller\\Admin\\AdminController::showOrder'], ['id'], null, null, false, true, null]],
        181 => [[['_route' => 'admin_order_status', '_controller' => 'App\\Controller\\Admin\\AdminController::updateOrderStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        233 => [[['_route' => 'debug_password_test', '_controller' => 'App\\Controller\\PasswordDebugController::testPassword'], ['email', 'password'], null, null, false, true, null]],
        269 => [[['_route' => 'debug_auth_test', '_controller' => 'App\\Controller\\PasswordDebugController::testAuth'], ['email', 'password'], null, null, false, true, null]],
        305 => [[['_route' => 'product_image', '_controller' => 'App\\Controller\\ProductController::serveImage'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'product_review_add', '_controller' => 'App\\Controller\\ReviewController::addReview'], ['id'], ['POST' => 0], null, false, false, null]],
        370 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\CartController::update'], ['id'], null, null, false, true, null]],
        410 => [
            [['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
