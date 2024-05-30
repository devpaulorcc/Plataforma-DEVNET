<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::home');
$routes->get('sair', 'Main::sairS');

$routes->get('login', 'Main::login');
$routes->post('login_sb', 'Main::login_sb');

$routes->get('cadastro', 'Cadastro::cadastro');
$routes->post('cadastro_sb', 'Cadastro::cadastro_sb');