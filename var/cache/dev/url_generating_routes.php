<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_errors' => [['status'], ['_controller' => 'api_platform.action.error_page'], ['status' => '\\d+'], [['variable', '/', '\\d+', 'status', true], ['text', '/api/errors']], [], [], []],
    'api_validation_errors' => [['id'], ['_controller' => 'api_platform.action.not_exposed'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_validation_errors_problem' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_hydra' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_jsonapi' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_/categoriess/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categoriess']], [], [], []],
    '_api_/categoriess{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/categoriess']], [], [], []],
    '_api_/categoriess{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/categoriess']], [], [], []],
    '_api_/categoriess/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categoriess']], [], [], []],
    '_api_/categoriess/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categoriess']], [], [], []],
    '_api_/categoriess/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Categories', '_api_operation_name' => '_api_/categoriess/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categoriess']], [], [], []],
    '_api_/fournisseurs/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/fournisseurs']], [], [], []],
    '_api_/fournisseurs{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/fournisseurs']], [], [], []],
    '_api_/fournisseurs{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/fournisseurs']], [], [], []],
    '_api_/fournisseurs/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/fournisseurs']], [], [], []],
    '_api_/fournisseurs/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/fournisseurs']], [], [], []],
    '_api_/fournisseurs/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_operation_name' => '_api_/fournisseurs/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/fournisseurs']], [], [], []],
    '_api_/produits/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/produits']], [], [], []],
    '_api_/produits{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/produits']], [], [], []],
    '_api_/produits{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/produits']], [], [], []],
    '_api_/produits/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/produits']], [], [], []],
    '_api_/produits/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/produits']], [], [], []],
    '_api_/produits/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Produit', '_api_operation_name' => '_api_/produits/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/produits']], [], [], []],
    '_api_/utilisateurs/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/utilisateurs']], [], [], []],
    '_api_/utilisateurs{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/utilisateurs']], [], [], []],
    '_api_/utilisateurs{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/utilisateurs']], [], [], []],
    '_api_/utilisateurs/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/utilisateurs']], [], [], []],
    '_api_/utilisateurs/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/utilisateurs']], [], [], []],
    '_api_/utilisateurs/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/utilisateurs']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], ['id' => '\\d+'], [['text', '/accueil']], [], [], []],
    'sous_categories' => [[], ['_controller' => 'App\\Controller\\AdminController::indexProd'], [], [['text', '/souscategories/']], [], [], []],
    'guitares' => [[], ['_controller' => 'App\\Controller\\AdminController::indexGuit'], [], [['text', '/souscategories/guitares']], [], [], []],
    'claviers' => [[], ['_controller' => 'App\\Controller\\AdminController::indexClav'], [], [['text', '/souscategories/claviers']], [], [], []],
    'saxophones' => [[], ['_controller' => 'App\\Controller\\AdminController::indexSax'], [], [['text', '/souscategories/saxophones']], [], [], []],
    'logiciels' => [[], ['_controller' => 'App\\Controller\\AdminController::indexLog'], [], [['text', '/souscategories/logiciels']], [], [], []],
    'batteries' => [[], ['_controller' => 'App\\Controller\\AdminController::indexBat'], [], [['text', '/souscategories/batteries']], [], [], []],
    'accessoires' => [[], ['_controller' => 'App\\Controller\\AdminController::indexSono'], [], [['text', '/souscategories/accessoires']], [], [], []],
    'sonorisation' => [[], ['_controller' => 'App\\Controller\\AdminController::indexAcces'], [], [['text', '/souscategories/sonorisation']], [], [], []],
    'librairie' => [[], ['_controller' => 'App\\Controller\\AdminController::indexLib'], [], [['text', '/souscategories/librairie']], [], [], []],
    'guit_classiques' => [['id'], ['_controller' => 'App\\Controller\\AdminController::showGuitClass'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/souscategories/guitares']], [], [], []],
    'cart_index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/cart/add']], [], [], []],
    'cart_decrease' => [['id'], ['_controller' => 'App\\Controller\\CartController::decreaseQuantity'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/decrease']], [], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/cart/remove']], [], [], []],
    'app_categories_index' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/categories/']], [], [], []],
    'app_categories_new' => [[], ['_controller' => 'App\\Controller\\CategoriesController::newCat'], [], [['text', '/categories/new']], [], [], []],
    'app_categories_show' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/categories']], [], [], []],
    'categories_show_by_slug' => [['slug'], ['_controller' => 'App\\Controller\\CategoriesController::showBySlug'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/categories']], [], [], []],
    'app_categories_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::editCat'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'app_categories_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::deleteCat'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'validation_commande' => [[], ['_controller' => 'App\\Controller\\CommandeController::validation'], [], [['text', '/commande/validation']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'app_main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'paiement' => [['id'], ['_controller' => 'App\\Controller\\PaiementController::paiement'], [], [['text', '/paiement'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'order_success' => [[], ['_controller' => 'App\\Controller\\PaiementController::success'], [], [['text', '/commande/success']], [], [], []],
    'order_cancel' => [[], ['_controller' => 'App\\Controller\\PaiementController::cancel'], [], [['text', '/commande/cancel']], [], [], []],
    'app_produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produits/']], [], [], []],
    'liste_produits' => [[], ['_controller' => 'App\\Controller\\ProduitController::list'], [], [['text', '/produits/achat']], [], [], []],
    'app_produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::newProd'], [], [['text', '/produits/new']], [], [], []],
    'app_produit_show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/produits']], [], [], []],
    'app_produit_edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::editProd'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produits']], [], [], []],
    'app_produit_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::deleteProd'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produits']], [], [], []],
    'profil_display' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/profil/']], [], [], []],
    'profil_update' => [[], ['_controller' => 'App\\Controller\\ProfilController::updateRoles'], [], [['text', '/profil/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'App\Controller\AccueilController::index' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], ['id' => '\\d+'], [['text', '/accueil']], [], [], []],
    'App\Controller\AdminController::indexProd' => [[], ['_controller' => 'App\\Controller\\AdminController::indexProd'], [], [['text', '/souscategories/']], [], [], []],
    'App\Controller\AdminController::indexGuit' => [[], ['_controller' => 'App\\Controller\\AdminController::indexGuit'], [], [['text', '/souscategories/guitares']], [], [], []],
    'App\Controller\AdminController::indexClav' => [[], ['_controller' => 'App\\Controller\\AdminController::indexClav'], [], [['text', '/souscategories/claviers']], [], [], []],
    'App\Controller\AdminController::indexSax' => [[], ['_controller' => 'App\\Controller\\AdminController::indexSax'], [], [['text', '/souscategories/saxophones']], [], [], []],
    'App\Controller\AdminController::indexLog' => [[], ['_controller' => 'App\\Controller\\AdminController::indexLog'], [], [['text', '/souscategories/logiciels']], [], [], []],
    'App\Controller\AdminController::indexBat' => [[], ['_controller' => 'App\\Controller\\AdminController::indexBat'], [], [['text', '/souscategories/batteries']], [], [], []],
    'App\Controller\AdminController::indexSono' => [[], ['_controller' => 'App\\Controller\\AdminController::indexSono'], [], [['text', '/souscategories/accessoires']], [], [], []],
    'App\Controller\AdminController::indexAcces' => [[], ['_controller' => 'App\\Controller\\AdminController::indexAcces'], [], [['text', '/souscategories/sonorisation']], [], [], []],
    'App\Controller\AdminController::indexLib' => [[], ['_controller' => 'App\\Controller\\AdminController::indexLib'], [], [['text', '/souscategories/librairie']], [], [], []],
    'App\Controller\AdminController::showGuitClass' => [['id'], ['_controller' => 'App\\Controller\\AdminController::showGuitClass'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/souscategories/guitares']], [], [], []],
    'App\Controller\CartController::index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'App\Controller\CartController::add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/cart/add']], [], [], []],
    'App\Controller\CartController::decreaseQuantity' => [['id'], ['_controller' => 'App\\Controller\\CartController::decreaseQuantity'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/decrease']], [], [], []],
    'App\Controller\CartController::remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/cart/remove']], [], [], []],
    'App\Controller\CategoriesController::index' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/categories/']], [], [], []],
    'App\Controller\CategoriesController::newCat' => [[], ['_controller' => 'App\\Controller\\CategoriesController::newCat'], [], [['text', '/categories/new']], [], [], []],
    'App\Controller\CategoriesController::show' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/categories']], [], [], []],
    'App\Controller\CategoriesController::showBySlug' => [['slug'], ['_controller' => 'App\\Controller\\CategoriesController::showBySlug'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/categories']], [], [], []],
    'App\Controller\CategoriesController::editCat' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::editCat'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'App\Controller\CategoriesController::deleteCat' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::deleteCat'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'App\Controller\CommandeController::validation' => [[], ['_controller' => 'App\\Controller\\CommandeController::validation'], [], [['text', '/commande/validation']], [], [], []],
    'App\Controller\ContactController::index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'App\Controller\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'App\Controller\MainController::index' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\PaiementController::paiement' => [['id'], ['_controller' => 'App\\Controller\\PaiementController::paiement'], [], [['text', '/paiement'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'App\Controller\PaiementController::success' => [[], ['_controller' => 'App\\Controller\\PaiementController::success'], [], [['text', '/commande/success']], [], [], []],
    'App\Controller\PaiementController::cancel' => [[], ['_controller' => 'App\\Controller\\PaiementController::cancel'], [], [['text', '/commande/cancel']], [], [], []],
    'App\Controller\ProduitController::index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produits/']], [], [], []],
    'App\Controller\ProduitController::list' => [[], ['_controller' => 'App\\Controller\\ProduitController::list'], [], [['text', '/produits/achat']], [], [], []],
    'App\Controller\ProduitController::newProd' => [[], ['_controller' => 'App\\Controller\\ProduitController::newProd'], [], [['text', '/produits/new']], [], [], []],
    'App\Controller\ProduitController::show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/produits']], [], [], []],
    'App\Controller\ProduitController::editProd' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::editProd'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produits']], [], [], []],
    'App\Controller\ProduitController::deleteProd' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::deleteProd'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produits']], [], [], []],
    'App\Controller\ProfilController::index' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/profil/']], [], [], []],
    'App\Controller\ProfilController::updateRoles' => [[], ['_controller' => 'App\\Controller\\ProfilController::updateRoles'], [], [['text', '/profil/']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
];
