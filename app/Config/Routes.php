<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Cinema::index');
$routes->get('/orderpage', 'Cinema::order');
$routes->get('/moviedetail/(:any)', 'Cinema::singleUser/$1');
