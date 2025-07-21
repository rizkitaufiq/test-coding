<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('user/create', 'Home::create');
$routes->post('user/store', 'Home::store');
$routes->get('user/delete/(:num)', 'Home::delete/$1');
