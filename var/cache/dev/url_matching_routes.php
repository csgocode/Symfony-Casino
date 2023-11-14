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
        '/' => [[['_route' => 'app_controlador_casino', '_controller' => 'App\\Controller\\ControladorCasinoController::index'], null, null, null, false, false, null]],
        '/contacto' => [[['_route' => 'contactoapp', '_controller' => 'App\\Controller\\ControladorCasinoController::contact'], null, null, null, false, false, null]],
        '/checkUsers' => [[['_route' => 'checkusers', '_controller' => 'App\\Controller\\ControladorCasinoController::checkAllUsers'], null, null, null, false, false, null]],
        '/checkBannedUsers' => [[['_route' => 'bannedUsers', '_controller' => 'App\\Controller\\ControladorCasinoController::checkBannedUsers'], null, null, null, false, false, null]],
        '/usuario/nuevo' => [[['_route' => 'newUser', '_controller' => 'App\\Controller\\ControladorCasinoController::nuevo'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/perfil/(?'
                    .'|verificacion/([^/]++)(*:452)'
                    .'|([^/]++)(*:468)'
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
        452 => [[['_route' => 'verifyUser', '_controller' => 'App\\Controller\\ControladorCasinoController::verifyUser'], ['id'], null, null, false, true, null]],
        468 => [
            [['_route' => 'app_perfil', '_controller' => 'App\\Controller\\PerfilController::perfilUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
