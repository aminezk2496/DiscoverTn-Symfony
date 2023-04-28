<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/indexreclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/display_reclamation' => [[['_route' => 'display_reclamation', '_controller' => 'App\\Controller\\ReclamationController::display_reclamation'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'AddReclamation', '_controller' => 'App\\Controller\\ReclamationController::AddReclamation'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'user_login', '_controller' => 'App\\Controller\\UtilisateurController::login'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'user_signup', '_controller' => 'App\\Controller\\UtilisateurController::signup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Admin/pdf' => [[['_route' => 'users.pdf', '_controller' => 'App\\Controller\\UtilisateurController::generatePdfPersonne'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_user_search', '_controller' => 'App\\Controller\\UtilisateurController::search'], null, null, null, false, false, null]],
        '/resetpassword' => [[['_route' => 'resetpassword', '_controller' => 'App\\Controller\\UtilisateurController::resetpassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/confirmcode' => [[['_route' => 'confirmcode', '_controller' => 'App\\Controller\\UtilisateurController::confirmcode'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/updatepassword' => [[['_route' => 'updatepassword', '_controller' => 'App\\Controller\\UtilisateurController::updatepassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/FuserUpdate' => [[['_route' => 'FuserUpdate', '_controller' => 'App\\Controller\\UtilisateurController::FuserUpdate'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'user_logout', '_controller' => 'App\\Controller\\UtilisateurController::logout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => '', '_controller' => 'App\\Controller\\UtilisateurController::home'], null, null, null, false, false, null]],
        '/Admin/AdminHome' => [[['_route' => 'UsersHome', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, null, null, false, false, null]],
        '/Admin/shownoadmins' => [[['_route' => 'shownoadmins', '_controller' => 'App\\Controller\\UtilisateurController::shownoadmins'], null, null, null, false, false, null]],
        '/AddUser' => [[['_route' => 'AddUser', '_controller' => 'App\\Controller\\UtilisateurController::AddUser'], null, null, null, false, false, null]],
        '/indexAdmin' => [[['_route' => 'index_admin', '_controller' => 'App\\Controller\\UtilisateurController::indexAdmin'], null, null, null, false, false, null]],
        '/indexFront' => [[['_route' => 'index_front', '_controller' => 'App\\Controller\\UtilisateurController::indexFront'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reply_reclam/([^/]++)(*:29)'
                .'|/d(?'
                    .'|estroy_reclam/([^/]++)(*:63)'
                    .'|ropuser/([^/]++)(*:86)'
                .')'
                .'|/Admin/rankup([^/]++)(*:115)'
                .'|/userUpdate/([^/]++)(*:143)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:182)'
                    .'|wdt/([^/]++)(*:202)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:248)'
                            .'|router(*:262)'
                            .'|exception(?'
                                .'|(*:282)'
                                .'|\\.css(*:295)'
                            .')'
                        .')'
                        .'|(*:305)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'reply_reclam', '_controller' => 'App\\Controller\\ReclamationController::reply_reclam'], ['id'], null, null, false, true, null]],
        63 => [[['_route' => 'destroy_reclam', '_controller' => 'App\\Controller\\ReclamationController::destroy_reclam'], ['id'], null, null, false, true, null]],
        86 => [[['_route' => 'dropuser', '_controller' => 'App\\Controller\\UtilisateurController::dropuser'], ['id'], null, null, false, true, null]],
        115 => [[['_route' => 'rankup', '_controller' => 'App\\Controller\\UtilisateurController::rankup'], ['id'], null, null, false, true, null]],
        143 => [[['_route' => 'userUpdate', '_controller' => 'App\\Controller\\UtilisateurController::userUpdate'], ['id'], null, null, false, true, null]],
        182 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        202 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        248 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        262 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        282 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        295 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        305 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
