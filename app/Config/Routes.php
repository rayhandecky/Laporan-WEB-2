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
$routes->get('/paket', 'Paket::index'); // Halaman daftar paket umrah
$routes->get('/paket/detail/(:segment)', 'Paket::detail/$1'); // Halaman detail paket umrah
$routes->post('/paket/order', 'Paket::order'); // Halaman pemesanan paket umrah
$routes->get('/jadwal', 'Jadwal::index'); // Halaman jadwal keberangkatan umrah
$routes->get('/jadwal/detail/(:segment)', 'Jadwal::detail/$1'); // Halaman detail jadwal keberangkatan

// Additional Routing
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
