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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/avis' => [[['_route' => 'avis', '_controller' => 'App\\Controller\\AvisController::index'], null, null, null, false, false, null]],
        '/read' => [[['_route' => 'readR', '_controller' => 'App\\Controller\\AvisController::readR'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\AvisController::create'], null, null, null, false, false, null]],
        '/bar' => [[['_route' => 'bar', '_controller' => 'App\\Controller\\BarController::index'], null, null, null, false, false, null]],
        '/chambre/h' => [[['_route' => 'chambre_h', '_controller' => 'App\\Controller\\ChambreHController::index'], null, null, null, false, false, null]],
        '/chambre/m' => [[['_route' => 'chambre_m', '_controller' => 'App\\Controller\\ChambreMController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/default' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/gift' => [[['_route' => 'gift', '_controller' => 'App\\Controller\\GiftController::index'], null, null, null, false, false, null]],
        '/hotel' => [[['_route' => 'hotel', '_controller' => 'App\\Controller\\HotelController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/maison' => [[['_route' => 'maison', '_controller' => 'App\\Controller\\MaisonController::index'], null, null, null, false, false, null]],
        '/places' => [[['_route' => 'places', '_controller' => 'App\\Controller\\PlacesController::index'], null, null, null, false, false, null]],
        '/promotion' => [[['_route' => 'promotion', '_controller' => 'App\\Controller\\PromotionController::index'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/listp' => [[['_route' => 'reclamation_listp', '_controller' => 'App\\Controller\\ReclamationController::listp'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/reponse/reclamation' => [[['_route' => 'reponse_reclamation', '_controller' => 'App\\Controller\\ReponseReclamationController::index'], null, null, null, false, false, null]],
        '/readR' => [[['_route' => 'read', '_controller' => 'App\\Controller\\ReponseReclamationController::read'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'create', '_controller' => 'App\\Controller\\ReponseReclamationController::create'], null, null, null, false, false, null]],
        '/recherche' => [[['_route' => 'Recherche', '_controller' => 'App\\Controller\\ReponseReclamationController::Recherche'], null, null, null, false, false, null]],
        '/restaurent' => [[['_route' => 'restaurent', '_controller' => 'App\\Controller\\RestaurentController::index'], null, null, null, false, false, null]],
        '/settings' => [[['_route' => 'settings', '_controller' => 'App\\Controller\\SettingsController::index'], null, null, null, false, false, null]],
        '/suivre/avis' => [[['_route' => 'suivre_avis', '_controller' => 'App\\Controller\\SuivreAvisController::index'], null, null, null, false, false, null]],
        '/table/b' => [[['_route' => 'table_b', '_controller' => 'App\\Controller\\TableBController::index'], null, null, null, false, false, null]],
        '/table/r' => [[['_route' => 'table_r', '_controller' => 'App\\Controller\\TableRController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|/([^/]++)(*:188)'
                    .'|R/([^/]++)(*:206)'
                .')'
                .'|/reclamation/([^/]++)(?'
                    .'|(*:239)'
                    .'|/edit(*:252)'
                    .'|(*:260)'
                .')'
                .'|/updateR/([^/]++)(*:286)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], null, null, false, true, null]],
        206 => [[['_route' => 'deleteR', '_controller' => 'App\\Controller\\ReponseReclamationController::delete'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        286 => [
            [['_route' => 'updateR', '_controller' => 'App\\Controller\\ReponseReclamationController::update'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
