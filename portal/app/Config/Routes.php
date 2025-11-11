<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Gfa::index');
$routes->get('gfa/', 'Gfa::index');

// For routing to any method in Home controller with a dynamic segment
$routes->add('gfa/(:any)', 'Gfa::$1');

// For admin routes with dynamic segments
$routes->get('admin', 'Admin::index');
$routes->get('admin/(:any)', 'Admin::$1');

$routes->add('admin/(:any)', 'Admin::$1');
$routes->add('admin', 'Admin::index');
$routes->post('admin/(:any)', 'Admin::$1');
$routes->add('calendar/(:any)', 'CalendarController::$1');
$routes->add('chat/(:any)', 'ChatController::$1');

//$routes->post('admin/(:any)', 'Admin::$1');
// $routes->delete('admin/(:any)', 'Admin::$1');
// $routes->put('admin/(:any)', 'Admin::$1');
// $routes->add('admin/(:any)', 'Admin::$1');


