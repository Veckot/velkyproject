<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('komponentyVyrobce/(:any)', 'Main::komponentyVyrobce/$1');
$routes->get('komponent/(:num)', 'Main::komponent/$1');
$routes->get('tabs', 'Main::tabs');
