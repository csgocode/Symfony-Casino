<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_controlador_casino' => [[], ['_controller' => 'App\\Controller\\ControladorCasinoController::index'], [], [['text', '/']], [], [], []],
    'contactoapp' => [[], ['_controller' => 'App\\Controller\\ControladorCasinoController::contact'], [], [['text', '/contacto']], [], [], []],
    'checkUser_DNI' => [['id'], ['_controller' => 'App\\Controller\\ControladorCasinoController::checkUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/checkUser']], [], [], []],
    'checkusers' => [[], ['_controller' => 'App\\Controller\\ControladorCasinoController::checkAllUsers'], [], [['text', '/checkUsers']], [], [], []],
    'bannedUsers' => [[], ['_controller' => 'App\\Controller\\ControladorCasinoController::checkBannedUsers'], [], [['text', '/checkBannedUsers']], [], [], []],
    'newUser' => [[], ['_controller' => 'App\\Controller\\ControladorCasinoController::nuevo'], [], [['text', '/usuario/nuevo']], [], [], []],
    'editUser' => [['id'], ['_controller' => 'App\\Controller\\ControladorCasinoController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/usuario/editar']], [], [], []],
    'banUser' => [['id'], ['_controller' => 'App\\Controller\\ControladorCasinoController::banear'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/usuario/banear']], [], [], []],
    'adminUser' => [['id'], ['_controller' => 'App\\Controller\\ControladorCasinoController::makeAdm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/usuario/makeAdmin']], [], [], []],
    'removeadminUser' => [['id'], ['_controller' => 'App\\Controller\\ControladorCasinoController::removeAdm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/usuario/removeAdmin']], [], [], []],
    'unbanUser' => [['id'], ['_controller' => 'App\\Controller\\ControladorCasinoController::desbanear'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/usuario/unban']], [], [], []],
    'removeUser' => [['id'], ['_controller' => 'App\\Controller\\ControladorCasinoController::eliminar'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/usuario/eliminar']], [], [], []],
    'verifyAdminUser' => [['id'], ['_controller' => 'App\\Controller\\ControladorCasinoController::verificarUserAdm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/verificar']], [], [], []],
    'verifyDenegar' => [['id'], ['_controller' => 'App\\Controller\\ControladorCasinoController::denegarVerificacion'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/denegar']], [], [], []],
    'verifyUser' => [['id'], ['_controller' => 'App\\Controller\\ControladorCasinoController::verifyUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/perfil/verificacion']], [], [], []],
    'app_perfil' => [['id'], ['_controller' => 'App\\Controller\\PerfilController::perfilUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/perfil']], [], [], []],
    'app_perfil_propio' => [[], ['_controller' => 'App\\Controller\\PerfilController::perfilPropio'], [], [['text', '/perfil']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_wallet' => [[], ['_controller' => 'App\\Controller\\WalletController::index'], [], [['text', '/wallet']], [], [], []],
];
