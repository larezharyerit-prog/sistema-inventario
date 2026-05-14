<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('productos', 'Inventario::index');
$routes->get('productos/nuevo', 'Inventario::crear');
$routes->post('productos/guardar','Inventario::guardar');
$routes->get('productos/borrar/(:num)', 'Inventario::borrar/$1');
$routes->get('productos/comprar/(:num)', 'Inventario::comprar/$1');