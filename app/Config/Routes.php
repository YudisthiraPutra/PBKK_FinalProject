<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Hotel::index');
$routes->get('/roomdetail/(:segment)', 'Hotel::singleRoom/$1');
$routes->get('/order', 'Order::index');
$routes->post('Order/submitOrder', 'Order::submitOrder');
$routes->get('/payment', 'Order::payment');

// ADMIN DASHBOARD
$routes->get('/admindashboard', 'Hotel::dashboard');
$routes->get('/staffdata', 'Hotel::staffdata');
$routes->get('/customerdata', 'Hotel::customerdata');

// LOGIN
$routes->get('/login', 'Auth::index');
$routes->post('Auth/processLogin', 'Auth::processLogin');

$routes->get('/register', 'Auth::register');
$routes->post('Auth/processRegistration', 'Auth::processRegistration');



