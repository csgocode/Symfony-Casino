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
        '/afiliados' => [[['_route' => 'app_afiliated', '_controller' => 'App\\Controller\\AfiliateController::afiliadoPerfil'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_controlador_casino', '_controller' => 'App\\Controller\\ControladorCasinoController::index'], null, null, null, false, false, null]],
        '/contacto' => [[['_route' => 'contactoapp', '_controller' => 'App\\Controller\\ControladorCasinoController::contact'], null, null, null, false, false, null]],
        '/checkUsers' => [[['_route' => 'checkusers', '_controller' => 'App\\Controller\\ControladorCasinoController::checkAllUsers'], null, null, null, false, false, null]],
        '/checkBannedUsers' => [[['_route' => 'bannedUsers', '_controller' => 'App\\Controller\\ControladorCasinoController::checkBannedUsers'], null, null, null, false, false, null]],
        '/usuario/nuevo' => [[['_route' => 'newUser', '_controller' => 'App\\Controller\\ControladorCasinoController::nuevo'], null, null, null, false, false, null]],
        '/juegos' => [[['_route' => 'app_gaming', '_controller' => 'App\\Controller\\GamingController::indexgames'], null, null, null, false, false, null]],
        '/juego/royalv2' => [[['_route' => 'game_royalv2', '_controller' => 'App\\Controller\\GamingController::indexroyalgames'], null, null, null, false, false, null]],
        '/juego/bomba' => [[['_route' => 'game_bomba', '_controller' => 'App\\Controller\\GamingController::indexbombagames'], null, null, null, false, false, null]],
        '/juego/sheila' => [[['_route' => 'game_sheila', '_controller' => 'App\\Controller\\GamingController::indexsheilagames'], null, null, null, false, false, null]],
        '/perfil' => [[['_route' => 'app_perfil_propio', '_controller' => 'App\\Controller\\PerfilController::perfilPropio'], null, null, null, false, false, null]],
        '/payment/callback' => [[['_route' => 'payment_callback', '_controller' => 'App\\Controller\\PlisioPaymentController::paymentCallback'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/wallet' => [[['_route' => 'app_wallet', '_controller' => 'App\\Controller\\WalletController::walletPerfil'], null, null, null, false, false, null]],
        '/wallet/recarga' => [[['_route' => 'recarga_procesar', '_controller' => 'App\\Controller\\WalletController::procesar'], null, ['POST' => 0], null, false, false, null]],
        '/usuario/verificar' => [[['_route' => 'app_usuario_verificar', '_controller' => 'App\\Controller\\PerfilController::verificarEstado'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/checkUser/([^/]++)(*:188)'
                .'|/usuario/(?'
                    .'|e(?'
                        .'|ditar/([^/]++)(*:226)'
                        .'|liminar/([^/]++)(*:250)'
                    .')'
                    .'|banear/([^/]++)(*:274)'
                    .'|makeAdmin/([^/]++)(*:300)'
                    .'|removeAdmin/([^/]++)(*:328)'
                    .'|unban/([^/]++)(*:350)'
                .')'
                .'|/admin/(?'
                    .'|verificar/([^/]++)(*:387)'
                    .'|denegar/([^/]++)(*:411)'
                .')'
                .'|/p(?'
                    .'|erfil/(?'
                        .'|verificacion/([^/]++)(*:455)'
                        .'|([^/]++)(*:471)'
                    .')'
                    .'|ayment/create/([^/]++)/([^/]++)(*:511)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'checkUser_DNI', '_controller' => 'App\\Controller\\ControladorCasinoController::checkUser'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'editUser', '_controller' => 'App\\Controller\\ControladorCasinoController::edit'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'removeUser', '_controller' => 'App\\Controller\\ControladorCasinoController::eliminar'], ['id'], null, null, false, true, null]],
        274 => [[['_route' => 'banUser', '_controller' => 'App\\Controller\\ControladorCasinoController::banear'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'adminUser', '_controller' => 'App\\Controller\\ControladorCasinoController::makeAdm'], ['id'], null, null, false, true, null]],
        328 => [[['_route' => 'removeadminUser', '_controller' => 'App\\Controller\\ControladorCasinoController::removeAdm'], ['id'], null, null, false, true, null]],
        350 => [[['_route' => 'unbanUser', '_controller' => 'App\\Controller\\ControladorCasinoController::desbanear'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'verifyAdminUser', '_controller' => 'App\\Controller\\ControladorCasinoController::verificarUserAdm'], ['id'], null, null, false, true, null]],
        411 => [[['_route' => 'verifyDenegar', '_controller' => 'App\\Controller\\ControladorCasinoController::denegarVerificacion'], ['id'], null, null, false, true, null]],
        455 => [[['_route' => 'verifyUser', '_controller' => 'App\\Controller\\ControladorCasinoController::verifyUser'], ['id'], null, null, false, true, null]],
        471 => [[['_route' => 'app_perfil', '_controller' => 'App\\Controller\\PerfilController::perfilUser'], ['id'], null, null, false, true, null]],
        511 => [
            [['_route' => 'payment_create', '_controller' => 'App\\Controller\\PlisioPaymentController::createPayment'], ['crypto', 'cantidad'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
