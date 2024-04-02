<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'beranda::index');
$routes->get('/detail', 'detail::index');
$routes->get('/cart', 'cart::index');
$routes->get('/checkout', 'checkout::index');