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
        '/souscategories/sonorisation' => [[['_route' => 'sonorisation', '_controller' => 'App\\Controller\\AdminController::indexAcces'], null, ['GET' => 0], null, false, false, null]],
        '/souscategories/librairie' => [[['_route' => 'librairie', '_controller' => 'App\\Controller\\AdminController::indexLib'], null, ['GET' => 0], null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'app_categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categories/new' => [[['_route' => 'app_categories_new', '_controller' => 'App\\Controller\\CategoriesController::newCat'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande/validation' => [[['_route' => 'validation_commande', '_controller' => 'App\\Controller\\CommandeController::validation'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/success' => [[['_route' => 'order_success', '_controller' => 'App\\Controller\\PaiementController::success'], null, null, null, false, false, null]],
        '/commande/cancel' => [[['_route' => 'order_cancel', '_controller' => 'App\\Controller\\PaiementController::cancel'], null, null, null, false, false, null]],
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
                        .'|errors/(\\d+)(*:65)'
                        .'|validation_errors/([^/]++)(*:98)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:134)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:165)'
                        .'|c(?'
                            .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:207)'
                            .'|ategoriess(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:254)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:280)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:318)'
                                .')'
                            .')'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:358)'
                        .')'
                        .'|fournisseurs(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:408)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:434)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:472)'
                            .')'
                        .')'
                        .'|produits(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:519)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:545)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:583)'
                            .')'
                        .')'
                        .'|utilisateurs(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:634)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:660)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:698)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:741)'
                    .'|wdt/([^/]++)(*:761)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:803)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:840)'
                                .'|router(*:854)'
                                .'|exception(?'
                                    .'|(*:874)'
                                    .'|\\.css(*:887)'
                                .')'
                            .')'
                            .'|(*:897)'
                        .')'
                    .')'
                .')'
                .'|/souscategories/guitares/(\\d+)(*:938)'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|add/(\\d+)(*:970)'
                            .'|decrease/([^/]++)(*:995)'
                            .'|remove/(\\d+)(*:1015)'
                        .')'
                        .'|tegories/(?'
                            .'|(\\d+)(*:1042)'
                            .'|([^/]++)(?'
                                .'|(*:1062)'
                                .'|/(?'
                                    .'|edit(*:1079)'
                                    .'|delete(*:1094)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|ommande/([^/]++)/paiement(*:1132)'
                .')'
                .'|/produits/(?'
                    .'|(\\d+)(*:1160)'
                    .'|([^/]++)/(?'
                        .'|edit(*:1185)'
                        .'|delete(*:1200)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        65 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.error_page'], ['status'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        98 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        134 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        165 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        207 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        254 => [[['_route' => '_api_/categoriess/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        280 => [
            [['_route' => '_api_/categoriess{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categoriess{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        318 => [
            [['_route' => '_api_/categoriess/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/categoriess/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categoriess/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        358 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        408 => [[['_route' => '_api_/fournisseurs/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        434 => [
            [['_route' => '_api_/fournisseurs{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/fournisseurs{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        472 => [
            [['_route' => '_api_/fournisseurs/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/fournisseurs/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/fournisseurs/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        519 => [[['_route' => '_api_/produits/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        545 => [
            [['_route' => '_api_/produits{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/produits{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        583 => [
            [['_route' => '_api_/produits/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/produits/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/produits/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        634 => [[['_route' => '_api_/utilisateurs/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        660 => [
            [['_route' => '_api_/utilisateurs{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/utilisateurs{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        698 => [
            [['_route' => '_api_/utilisateurs/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/utilisateurs/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/utilisateurs/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        741 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        761 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        803 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        840 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        854 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        874 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        887 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        897 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        938 => [[['_route' => 'guit_classiques', '_controller' => 'App\\Controller\\AdminController::showGuitClass'], ['id'], ['GET' => 0], null, false, true, null]],
        970 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        995 => [[['_route' => 'cart_decrease', '_controller' => 'App\\Controller\\CartController::decreaseQuantity'], ['id'], null, null, false, true, null]],
        1015 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        1042 => [[['_route' => 'app_categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1062 => [[['_route' => 'categories_show_by_slug', '_controller' => 'App\\Controller\\CategoriesController::showBySlug'], ['slug'], null, null, false, true, null]],
        1079 => [[['_route' => 'app_categories_edit', '_controller' => 'App\\Controller\\CategoriesController::editCat'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1094 => [[['_route' => 'app_categories_delete', '_controller' => 'App\\Controller\\CategoriesController::deleteCat'], ['id'], ['POST' => 0], null, false, false, null]],
        1132 => [[['_route' => 'paiement', '_controller' => 'App\\Controller\\PaiementController::paiement'], ['id'], null, null, false, false, null]],
        1160 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1185 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::editProd'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1200 => [
            [['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::deleteProd'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
