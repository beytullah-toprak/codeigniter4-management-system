<?php

use CodeIgniter\Router\RouteCollection;

/**
 * Admin web routes
 *
 * @var RouteCollection $routes
 */

$routes->group('{locale}/admin', [
    'namespace' => 'App\Controllers\Backend',
    ],  function ($routes) {
        
    $routes->match(['get', 'post'], 'register', 'RegisterController::index', ['as' => 'admin_register']);
});