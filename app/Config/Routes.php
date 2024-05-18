<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/kategori', 'Kategori::index');
//$routes->add('/kategori/add', 'Kategori::tambah');
//$routes->add('/kategori/(:segment)/edit', 'Kategori::edit/$1');
//$routes->get('/kategori/(:segment)/delete', 'Kategori::delete/$1');
 //publik 
$routes->get('/', 'Beranda::index');
$routes->get('/detail', 'Detail::index');
$routes->get('/cart', 'Cart::index');
$routes->get('/checkout', 'Checkout::index');

/* admin */
$routes->get('dashboard/', 'Dashboard::index');
$routes->get('/kategori', 'Kategori::index');
$routes->add('/kategori_add', 'Kategori::kategori_add');
$routes->add('/kategori_edit/(:segment)/edit', 'Kategori::kategori_edit/$1');
//$routes->add('/kategori_edit/(:any)/edit', 'Kategori::kategori_edit');
$routes->get('/kategori/(:segment)/delete', 'Kategori::delete/$1');