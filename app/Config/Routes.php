<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// home page routes
$routes->get('/', 'Dashboard::index');

// dashboard routes
$routes->get('/admin/dashboard', 'Dashboard::index');

// penduduk routes
$routes->get('/admin/penduduk', 'Penduduk::index');
$routes->get('/admin/penduduk/create', 'Penduduk::create');
$routes->get('/admin/penduduk/excel', 'Penduduk::excel');
$routes->get('/admin/penduduk/pdf', 'Penduduk::pdf');
$routes->delete('/admin/penduduk/(:num)', 'Penduduk::delete/$1');
$routes->get('/admin/penduduk/edit/(:segment)', 'Penduduk::edit/$1');
$routes->get('/admin/penduduk/detail/(:segment)', 'Penduduk::details/$1');

//routes kartu keluarga
$routes->get('/admin/kk', 'Kk::index');
$routes->get('/admin/kk/create', 'Kk::create');
$routes->get('/admin/kk/edit/(:segment)', 'Kk::edit/$1');
$routes->get('/admin/kk/pdf', 'Kk::pdf');
$routes->get('/admin/kk/excel', 'Kk::excel');
$routes->get('/admin/kk/detail/(:segment)', 'Kk::details/$1');


$routes->get('/admin/kelahiran', 'Kelahiran::index');

// meninggal routes
$routes->get('/admin/meninggal', 'Meninggal::index');
$routes->get('/admin/meninggal/create', 'Meninggal::create');
$routes->get('/admin/meninggal/edit/(:segment)', 'Meninggal::edit/$1');
$routes->delete('/admin/meninggal/(:num)', 'Meninggal::delete/$1');

//datang routes
$routes->get('/admin/datang', 'Datang::index');
$routes->get('/admin/datang/create', 'Datang::create');
$routes->get('/admin/datang/edit/(:segment)', 'Datang::edit/$1');
$routes->delete('/admin/datang/(:num)', 'Datang::delete/$1');
$routes->get('/admin/datang/detail/(:segment)', 'Datang::details/$1');
$routes->get('/admin/datang/pdf', 'Datang::pdf');
$routes->get('/admin/datang/excel', 'Datang::excel');
//-----//

// pindah routes
$routes->get('/admin/pindah', 'Pindah::index');
$routes->get('/admin/pindah/create', 'Pindah::create');
$routes->get('/admin/pindah/edit/(:segment)', 'Pindah::edit/$1');
$routes->delete('/admin/pindah/(:num)', 'Pindah::delete/$1');
$routes->get('/admin/pindah/pdf', 'Pindah::pdf');
$routes->get('/admin/pindah/excel', 'Pindah::excel');


$routes->get('/admin/users', 'Users::index', ['filter' => 'role:admin']);
$routes->get('/admin/users/index', 'Users::index', ['filter' => 'role:admin']);

// surat routes
$routes->get('/admin/surat/', 'Surat::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
