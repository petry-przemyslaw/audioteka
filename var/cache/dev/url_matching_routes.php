<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/cart' => [[['_route' => 'cart-create', '_controller' => 'App\\Controller\\Cart\\CreateController'], null, ['POST' => 0], null, false, false, null]],
        '/products' => [
            [['_route' => 'product-add', '_controller' => 'App\\Controller\\Catalog\\AddController'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'product-list', '_controller' => 'App\\Controller\\Catalog\\ListController'], null, ['GET' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/cart/([^/]++)(?'
                    .'|/([^/]++)(?'
                        .'|(*:71)'
                    .')'
                    .'|(*:79)'
                .')'
                .'|/products/([^/]++)(*:105)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [
            [['_route' => 'cart-add-product', '_controller' => 'App\\Controller\\Cart\\AddProductController'], ['cart', 'product'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'cart-remove-product', '_controller' => 'App\\Controller\\Cart\\RemoveProductController'], ['cart', 'product'], ['DELETE' => 0], null, false, true, null],
        ],
        79 => [[['_route' => 'cart-show', '_controller' => 'App\\Controller\\Cart\\ShowCartController'], ['cart'], ['GET' => 0], null, false, true, null]],
        105 => [
            [['_route' => 'product-delete', '_controller' => 'App\\Controller\\Catalog\\RemoveController'], ['product'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
