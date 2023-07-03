<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
    return view('/admin/pages-error-404.php');
});
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// User Views
$routes->get('/', 'User::index');
$routes->get('/homepage', 'User::homepage');
$routes->get('/monkeyforest', 'User::monkeyforest');
$routes->get('/blancomuseum', 'User::blancomuseum');
$routes->get('/tanahgajah', 'User::tanahgajah');
$routes->get('/denah', 'User::denah');
$routes->get('/monkeyforest/gallery', 'User::gallerymf');

// Admin Views
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin,superadmin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/profile', 'Admin::profile', ['filter' => 'role:admin']);
$routes->get('/admin/notfound', 'Admin::notfound');

// Ubud Data


// Monkey Forest Data
$routes->get('/admin/monkeyforest/gallerytable', 'Admin::gallerytablemf', ['filter' => 'role:admin']);
$routes->get('/admin/monkeyforest/gallerytable/addphoto', 'Admin::addphotomf', ['filter' => 'role:admin']);
$routes->post('/admin/monkeyforest/gallerytable/savephoto', 'Admin::savephotomf', ['filter' => 'role:admin']);
$routes->get('/admin/monkeyforest/gallerytable/editphoto/(:segment)', 'Admin::editphotomf/$1', ['filter' => 'role:admin']);
$routes->post('/admin/monkeyforest/gallerytable/updatephoto/(:num)', 'Admin::updatephotomf/$1', ['filter' => 'role:admin']);
$routes->delete('/admin/monkeyforest/gallerytable/(:num)', 'Admin::delphotomf/$1', ['filter' => 'role:admin']);

// Blanco Museum Data


// Tanah Gajah Data


// User List
$routes->get('/admin/list', 'Admin::list', ['filter' => 'role:admin']);
$routes->delete('/admin/list/(:num)', 'Admin::delUser/$1', ['filter' => 'role:admin']);
$routes->get('/admin/list/(:any)', 'Admin::detailUser/$1', ['filter' => 'role:admin']);






/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
