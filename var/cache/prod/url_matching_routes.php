<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/checkUser/([^/]++)(*:26)'
                .'|/usuario/(?'
                    .'|e(?'
                        .'|ditar/([^/]++)(*:63)'
                        .'|liminar/([^/]++)(*:86)'
                    .')'
                    .'|banear/([^/]++)(*:109)'
                    .'|makeAdmin/([^/]++)(*:135)'
                    .'|removeAdmin/([^/]++)(*:163)'
                    .'|unban/([^/]++)(*:185)'
                .')'
                .'|/admin/(?'
                    .'|verificar/([^/]++)(*:222)'
                    .'|denegar/([^/]++)(*:246)'
                .')'
                .'|/perfil/verificacion/([^/]++)(*:284)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'checkUser_DNI', '_controller' => 'App\\Controller\\ControladorCasinoController::checkUser'], ['id'], null, null, false, true, null]],
        63 => [[['_route' => 'editUser', '_controller' => 'App\\Controller\\ControladorCasinoController::edit'], ['id'], null, null, false, true, null]],
        86 => [[['_route' => 'removeUser', '_controller' => 'App\\Controller\\ControladorCasinoController::eliminar'], ['id'], null, null, false, true, null]],
        109 => [[['_route' => 'banUser', '_controller' => 'App\\Controller\\ControladorCasinoController::banear'], ['id'], null, null, false, true, null]],
        135 => [[['_route' => 'adminUser', '_controller' => 'App\\Controller\\ControladorCasinoController::makeAdm'], ['id'], null, null, false, true, null]],
        163 => [[['_route' => 'removeadminUser', '_controller' => 'App\\Controller\\ControladorCasinoController::removeAdm'], ['id'], null, null, false, true, null]],
        185 => [[['_route' => 'unbanUser', '_controller' => 'App\\Controller\\ControladorCasinoController::desbanear'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'verifyAdminUser', '_controller' => 'App\\Controller\\ControladorCasinoController::verificarUserAdm'], ['id'], null, null, false, true, null]],
        246 => [[['_route' => 'verifyDenegar', '_controller' => 'App\\Controller\\ControladorCasinoController::denegarVerificacion'], ['id'], null, null, false, true, null]],
        284 => [
            [['_route' => 'verifyUser', '_controller' => 'App\\Controller\\ControladorCasinoController::verifyUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
