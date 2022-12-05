<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/about' => [[['_route' => 'aboutPage', '_controller' => 'App\\Controller\\aboutController::aboutPage'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'accountPage', '_controller' => 'App\\Controller\\accountController::accountPage'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cartPage', '_controller' => 'App\\Controller\\cartController::cartPage'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contactPage', '_controller' => 'App\\Controller\\contactController::contactPage'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'createPage', '_controller' => 'App\\Controller\\createController::createPage'], null, null, null, false, false, null]],
        '/get' => [[['_route' => 'product_get', '_controller' => 'App\\Controller\\createController::getNumber'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'mainPage', '_controller' => 'App\\Controller\\myController::mainPage'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\myController::loginAction'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'productPage', '_controller' => 'App\\Controller\\productController::productPage'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registrationPage', '_controller' => 'App\\Controller\\registrationController::registrationPage'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/product/([^/]++)(*:59)'
                .'|/registration/edit/([^/]++)(*:93)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [[['_route' => 'productId', '_controller' => 'App\\Controller\\productController::productId'], ['productId'], null, null, false, true, null]],
        93 => [
            [['_route' => 'registrationEdit', '_controller' => 'App\\Controller\\registrationController::registrationEdit'], ['userId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
