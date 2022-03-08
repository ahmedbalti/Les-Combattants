<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'avis' => [[], ['_controller' => 'App\\Controller\\AvisController::index'], [], [['text', '/avis']], [], []],
    'readR' => [[], ['_controller' => 'App\\Controller\\AvisController::readR'], [], [['text', '/read']], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\AvisController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/delete']], [], []],
    'blog' => [[], ['_controller' => 'App\\Controller\\AvisController::create'], [], [['text', '/blog']], [], []],
    'bar' => [[], ['_controller' => 'App\\Controller\\BarController::index'], [], [['text', '/bar']], [], []],
    'chambre_h' => [[], ['_controller' => 'App\\Controller\\ChambreHController::index'], [], [['text', '/chambre/h']], [], []],
    'chambre_m' => [[], ['_controller' => 'App\\Controller\\ChambreMController::index'], [], [['text', '/chambre/m']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], []],
    'default' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/default']], [], []],
    'event' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event']], [], []],
    'gift' => [[], ['_controller' => 'App\\Controller\\GiftController::index'], [], [['text', '/gift']], [], []],
    'hotel' => [[], ['_controller' => 'App\\Controller\\HotelController::index'], [], [['text', '/hotel']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], []],
    'maison' => [[], ['_controller' => 'App\\Controller\\MaisonController::index'], [], [['text', '/maison']], [], []],
    'places' => [[], ['_controller' => 'App\\Controller\\PlacesController::index'], [], [['text', '/places']], [], []],
    'promotion' => [[], ['_controller' => 'App\\Controller\\PromotionController::index'], [], [['text', '/promotion']], [], []],
    'reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation/']], [], []],
    'reclamation_listp' => [[], ['_controller' => 'App\\Controller\\ReclamationController::listp'], [], [['text', '/reclamation/listp']], [], []],
    'reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], []],
    'reclamation_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'reclamation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'reclamation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::index'], [], [['text', '/registration']], [], []],
    'reponse_reclamation' => [[], ['_controller' => 'App\\Controller\\ReponseReclamationController::index'], [], [['text', '/reponse/reclamation']], [], []],
    'read' => [[], ['_controller' => 'App\\Controller\\ReponseReclamationController::read'], [], [['text', '/readR']], [], []],
    'deleteR' => [['id'], ['_controller' => 'App\\Controller\\ReponseReclamationController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deleteR']], [], []],
    'create' => [[], ['_controller' => 'App\\Controller\\ReponseReclamationController::create'], [], [['text', '/create']], [], []],
    'updateR' => [['id'], ['_controller' => 'App\\Controller\\ReponseReclamationController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/updateR']], [], []],
    'Recherche' => [[], ['_controller' => 'App\\Controller\\ReponseReclamationController::Recherche'], [], [['text', '/recherche']], [], []],
    'restaurent' => [[], ['_controller' => 'App\\Controller\\RestaurentController::index'], [], [['text', '/restaurent']], [], []],
    'settings' => [[], ['_controller' => 'App\\Controller\\SettingsController::index'], [], [['text', '/settings']], [], []],
    'suivre_avis' => [[], ['_controller' => 'App\\Controller\\SuivreAvisController::index'], [], [['text', '/suivre/avis']], [], []],
    'table_b' => [[], ['_controller' => 'App\\Controller\\TableBController::index'], [], [['text', '/table/b']], [], []],
    'table_r' => [[], ['_controller' => 'App\\Controller\\TableRController::index'], [], [['text', '/table/r']], [], []],
];
