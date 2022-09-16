<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/activites' => [[['_route' => 'app_activites_index', '_controller' => 'App\\Controller\\ActivitesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/activites/new' => [[['_route' => 'app_activites_new', '_controller' => 'App\\Controller\\ActivitesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\BackOfficeController::back'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'app_categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categories/new' => [[['_route' => 'app_categories_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/operateurs' => [[['_route' => 'app_operateurs_index', '_controller' => 'App\\Controller\\OperateursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/operateurs/new' => [[['_route' => 'app_operateurs_new', '_controller' => 'App\\Controller\\OperateursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|ctivites/([^/]++)(?'
                        .'|(*:32)'
                        .'|/edit(*:44)'
                        .'|(*:51)'
                    .')'
                    .'|rtisan/id(?:/([^/]++))?(*:82)'
                .')'
                .'|/categories/([^/]++)(?'
                    .'|(*:113)'
                    .'|/edit(*:126)'
                    .'|(*:134)'
                .')'
                .'|/operateurs/([^/]++)(?'
                    .'|(*:166)'
                    .'|/edit(*:179)'
                    .'|(*:187)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:224)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_activites_show', '_controller' => 'App\\Controller\\ActivitesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_activites_edit', '_controller' => 'App\\Controller\\ActivitesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_activites_delete', '_controller' => 'App\\Controller\\ActivitesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'artisan', 'id' => 3, '_controller' => 'App\\Controller\\ArtisanController::artisan'], ['id'], null, null, false, true, null]],
        113 => [[['_route' => 'app_categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        126 => [[['_route' => 'app_categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        134 => [[['_route' => 'app_categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        166 => [[['_route' => 'app_operateurs_show', '_controller' => 'App\\Controller\\OperateursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        179 => [[['_route' => 'app_operateurs_edit', '_controller' => 'App\\Controller\\OperateursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        187 => [[['_route' => 'app_operateurs_delete', '_controller' => 'App\\Controller\\OperateursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        224 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
