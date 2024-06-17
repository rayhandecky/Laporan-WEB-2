<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Route Definitions
$routes->get('/', 'Home::index');

// Routes untuk halaman contact
$routes->get('/contact', 'Contact::index');
$routes->post('/contact/submit', 'Contact::submit');
$routes->get('/order', 'Order::index');
$routes->get('/order/create', 'Order::create');
$routes->post('/order/store', 'Order::store');
$routes->get('/order/edit/(:num)', 'Order::edit/$1');
$routes->post('/order/update/(:num)', 'Order::update/$1');
$routes->get('/order/delete/(:num)', 'Order::delete/$1');


// Additional Routing
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
