<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index', ['as' => 'index']);
 
 $routes->get('/playstem', 'PlayStem::index', ['as' => 'playstem']);