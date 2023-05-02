<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/evenement' => [[['_route' => 'app_evenement_admin_index', '_controller' => 'App\\Controller\\EvenementAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/evenement/new' => [[['_route' => 'app_evenement_admin_new', '_controller' => 'App\\Controller\\EvenementAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_client_index', '_controller' => 'App\\Controller\\EvenementClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_client_new', '_controller' => 'App\\Controller\\EvenementClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hebergement/index' => [[['_route' => 'app_hebergement', '_controller' => 'App\\Controller\\HebergementController::index'], null, null, null, false, false, null]],
        '/hebergement/success' => [[['_route' => 'win_hebergement', '_controller' => 'App\\Controller\\HebergementController::success'], null, null, null, false, false, null]],
        '/hebergement/add' => [[['_route' => 'add_Hebergement', '_controller' => 'App\\Controller\\HebergementController::addHebergement'], null, null, null, false, false, null]],
        '/hebergement/stat' => [[['_route' => 'stat_heber', '_controller' => 'App\\Controller\\HebergementController::statistiques'], null, null, null, false, false, null]],
        '/mailing' => [[['_route' => 'app_mailing', '_controller' => 'App\\Controller\\MailingController::send'], null, null, null, false, false, null]],
        '/participation' => [[['_route' => 'app_participation', '_controller' => 'App\\Controller\\ParticipationController::index'], null, null, null, false, false, null]],
        '/publication' => [[['_route' => 'app_publication_index', '_controller' => 'App\\Controller\\PublicationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/publication/show1' => [[['_route' => 'app_publication_show1', '_controller' => 'App\\Controller\\PublicationController::showFront'], null, ['GET' => 0], null, false, false, null]],
        '/publication/new' => [[['_route' => 'app_publication_new', '_controller' => 'App\\Controller\\PublicationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/indexreclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/display_reclamation' => [[['_route' => 'display_reclamation', '_controller' => 'App\\Controller\\ReclamationController::display_reclamation'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'AddReclamation', '_controller' => 'App\\Controller\\ReclamationController::AddReclamation'], null, null, null, false, false, null]],
        '/reservation/index' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reservation/index2' => [[['_route' => 'app_reser', '_controller' => 'App\\Controller\\ReservationController::pagination'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'win_reservation', '_controller' => 'App\\Controller\\ReservationController::success'], null, null, null, false, false, null]],
        '/reservation/add' => [[['_route' => 'add_Reservation', '_controller' => 'App\\Controller\\ReservationController::addReservation'], null, null, null, false, false, null]],
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
                .'|/commentaire/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|new(*:41)'
                            .'|edit(*:52)'
                        .')'
                        .'|(*:60)'
                    .')'
                    .'|commentaire/delete/([^/]++)(*:95)'
                .')'
                .'|/admin/evenement/([^/]++)(?'
                    .'|(*:131)'
                    .'|/edit(*:144)'
                    .'|(*:152)'
                .')'
                .'|/evenement/(?'
                    .'|([^/]++)(?'
                        .'|(*:186)'
                        .'|/edit(*:199)'
                        .'|(*:207)'
                    .')'
                    .'|participer/([^/]++)(*:235)'
                .')'
                .'|/status/([^/]++)/([^/]++)(*:269)'
                .'|/publication/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|signaler(*:316)'
                            .'|community(*:333)'
                            .'|edit(*:345)'
                            .'|delete(*:359)'
                        .')'
                        .'|(*:368)'
                    .')'
                    .'|publication/delete/([^/]++)(*:404)'
                .')'
                .'|/reply_reclam/([^/]++)(*:435)'
                .'|/d(?'
                    .'|estroy_reclam/([^/]++)(*:470)'
                    .'|ropuser/([^/]++)(*:494)'
                .')'
                .'|/Admin/rankup([^/]++)(*:524)'
                .'|/userUpdate/([^/]++)(*:552)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:591)'
                    .'|wdt/([^/]++)(*:611)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:657)'
                            .'|router(*:671)'
                            .'|exception(?'
                                .'|(*:691)'
                                .'|\\.css(*:704)'
                            .')'
                        .')'
                        .'|(*:714)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        52 => [[['_route' => 'edit_comment', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        60 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        95 => [[['_route' => 'app_commentaire_delete_ajax', '_controller' => 'App\\Controller\\CommentaireController::deleteCommentaireAjax'], ['id'], ['DELETE' => 0], null, false, true, null]],
        131 => [[['_route' => 'app_evenement_admin_show', '_controller' => 'App\\Controller\\EvenementAdminController::show'], ['idEvent'], ['GET' => 0], null, false, true, null]],
        144 => [[['_route' => 'app_evenement_admin_edit', '_controller' => 'App\\Controller\\EvenementAdminController::edit'], ['idEvent'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        152 => [[['_route' => 'app_evenement_admin_delete', '_controller' => 'App\\Controller\\EvenementAdminController::delete'], ['idEvent'], ['POST' => 0], null, false, true, null]],
        186 => [[['_route' => 'app_evenement_client_show', '_controller' => 'App\\Controller\\EvenementClientController::show'], ['idEvent'], ['GET' => 0], null, false, true, null]],
        199 => [[['_route' => 'app_evenement_client_edit', '_controller' => 'App\\Controller\\EvenementClientController::edit'], ['idEvent'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        207 => [[['_route' => 'app_evenement_client_delete', '_controller' => 'App\\Controller\\EvenementClientController::delete'], ['idEvent'], ['POST' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_evenement_client_participer', '_controller' => 'App\\Controller\\EvenementClientController::participer'], ['idEvent'], ['GET' => 0], null, false, true, null]],
        269 => [[['_route' => 'app_participation_client_status', '_controller' => 'App\\Controller\\ParticipationController::StatusChange'], ['idPart', 'status'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_publication_signaler', '_controller' => 'App\\Controller\\PublicationController::signaler'], ['id'], ['GET' => 0], null, false, false, null]],
        333 => [[['_route' => 'app_publication_community', '_controller' => 'App\\Controller\\PublicationController::community'], ['id'], ['GET' => 0], null, false, false, null]],
        345 => [[['_route' => 'app_publication_edit', '_controller' => 'App\\Controller\\PublicationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [[['_route' => 'app_publication_delete', '_controller' => 'App\\Controller\\PublicationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        368 => [[['_route' => 'app_publication_show', '_controller' => 'App\\Controller\\PublicationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'app_publication_delete_ajax', '_controller' => 'App\\Controller\\PublicationController::deletePublicationAjax'], ['id'], ['DELETE' => 0], null, false, true, null]],
        435 => [[['_route' => 'reply_reclam', '_controller' => 'App\\Controller\\ReclamationController::reply_reclam'], ['id'], null, null, false, true, null]],
        470 => [[['_route' => 'destroy_reclam', '_controller' => 'App\\Controller\\ReclamationController::destroy_reclam'], ['id'], null, null, false, true, null]],
        494 => [[['_route' => 'dropuser', '_controller' => 'App\\Controller\\UtilisateurController::dropuser'], ['id'], null, null, false, true, null]],
        524 => [[['_route' => 'rankup', '_controller' => 'App\\Controller\\UtilisateurController::rankup'], ['id'], null, null, false, true, null]],
        552 => [[['_route' => 'userUpdate', '_controller' => 'App\\Controller\\UtilisateurController::userUpdate'], ['id'], null, null, false, true, null]],
        591 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        611 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        657 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        671 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        691 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        704 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        714 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
