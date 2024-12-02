<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, ['GET' => 0], null, false, false, null]],
        '/souscategories' => [[['_route' => 'sous_categories', '_controller' => 'App\\Controller\\AdminController::indexProd'], null, null, null, true, false, null]],
        '/souscategories/guitares' => [[['_route' => 'guitares', '_controller' => 'App\\Controller\\AdminController::indexGuit'], null, ['GET' => 0], null, false, false, null]],
        '/souscategories/claviers' => [[['_route' => 'claviers', '_controller' => 'App\\Controller\\AdminController::indexClav'], null, ['GET' => 0], null, false, false, null]],
        '/souscategories/saxophones' => [[['_route' => 'saxophones', '_controller' => 'App\\Controller\\AdminController::indexSax'], null, ['GET' => 0], null, false, false, null]],
        '/souscategories/logiciels' => [[['_route' => 'logiciels', '_controller' => 'App\\Controller\\AdminController::indexLog'], null, ['GET' => 0], null, false, false, null]],
        '/souscategories/batteries' => [[['_route' => 'batteries', '_controller' => 'App\\Controller\\AdminController::indexBat'], null, ['GET' => 0], null, false, false, null]],
        '/souscategories/accessoires' => [[['_route' => 'accessoires', '_controller' => 'App\\Controller\\AdminController::indexSono'], null, ['GET' => 0], null, false, false, null]],
        '/souscategories/sonorisation' => [[['_route' => 'sonorisation', '_controller' => 'App\\Controller\\AdminController::indexAccès'], null, ['GET' => 0], null, false, false, null]],
        '/souscategories/librairie' => [[['_route' => 'librairie', '_controller' => 'App\\Controller\\AdminController::indexLib'], null, ['GET' => 0], null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'app_categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categories/new' => [[['_route' => 'app_categories_new', '_controller' => 'App\\Controller\\CategoriesController::newCat'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, ['GET' => 0], null, false, false, null]],
        '/produits' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produits/achat' => [[['_route' => 'liste_produits', '_controller' => 'App\\Controller\\ProduitController::list'], null, null, null, false, false, null]],
        '/produits/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::newProd'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profil' => [
            [['_route' => 'profil_display', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, true, false, null],
            [['_route' => 'profil_update', '_controller' => 'App\\Controller\\ProfilController::updateRoles'], null, null, null, true, false, null],
        ],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|errors(?:/(\\d+))?(*:70)'
                        .'|validation_errors/([^/]++)(*:103)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:140)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:171)'
                        .'|c(?'
                            .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:213)'
                            .'|ategoriess(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:260)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:286)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:324)'
                                .')'
                            .')'
                        .')'
                        .'|fournisseurs(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:376)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:402)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:440)'
                            .')'
                        .')'
                        .'|produits(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:487)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:513)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:551)'
                            .')'
                        .')'
                        .'|utilisateurs(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:602)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:628)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:666)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:709)'
                    .'|wdt/([^/]++)(*:729)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:775)'
                            .'|router(*:789)'
                            .'|exception(?'
                                .'|(*:809)'
                                .'|\\.css(*:822)'
                            .')'
                        .')'
                        .'|(*:832)'
                    .')'
                .')'
                .'|/souscategories/guitares/(\\d+)(*:872)'
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/(\\d+)(*:901)'
                        .'|remove/(\\d+)(*:921)'
                    .')'
                    .'|tegories/(?'
                        .'|(\\d+)(*:947)'
                        .'|([^/]++)(?'
                            .'|(*:966)'
                            .'|/(?'
                                .'|edit(*:982)'
                                .'|delete(*:996)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/produits/(?'
                    .'|(\\d+)(*:1026)'
                    .'|([^/]++)/(?'
                        .'|edit(*:1051)'
                        .'|delete(*:1066)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.not_exposed', 'status' => '500'], ['status'], null, null, false, true, null]],
        103 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        171 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        213 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        260 => [[['_route' => '_api_/categoriess/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        286 => [
            [['_route' => '_api_/categoriess{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categoriess{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        324 => [
            [['_route' => '_api_/categoriess/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/categoriess/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categoriess/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        376 => [[['_route' => '_api_/fournisseurs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        402 => [
            [['_route' => '_api_/fournisseurs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/fournisseurs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        440 => [
            [['_route' => '_api_/fournisseurs/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/fournisseurs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/fournisseurs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        487 => [[['_route' => '_api_/produits/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        513 => [
            [['_route' => '_api_/produits{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/produits{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        551 => [
            [['_route' => '_api_/produits/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/produits/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/produits/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        602 => [[['_route' => '_api_/utilisateurs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        628 => [
            [['_route' => '_api_/utilisateurs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/utilisateurs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        666 => [
            [['_route' => '_api_/utilisateurs/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/utilisateurs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/utilisateurs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        709 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        729 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        775 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        789 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        809 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        822 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        832 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        872 => [[['_route' => 'guit_classiques', '_controller' => 'App\\Controller\\AdminController::showGuitClass'], ['id'], ['GET' => 0], null, false, true, null]],
        901 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        921 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        947 => [[['_route' => 'app_categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        966 => [[['_route' => 'categories_show_by_slug', '_controller' => 'App\\Controller\\CategoriesController::showBySlug'], ['slug'], null, null, false, true, null]],
        982 => [[['_route' => 'app_categories_edit', '_controller' => 'App\\Controller\\CategoriesController::editCat'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        996 => [[['_route' => 'app_categories_delete', '_controller' => 'App\\Controller\\CategoriesController::deleteCat'], ['id'], ['POST' => 0], null, false, false, null]],
        1026 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1051 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::editProd'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1066 => [
            [['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::deleteProd'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
