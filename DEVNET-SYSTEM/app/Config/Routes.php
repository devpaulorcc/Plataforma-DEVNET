<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::home');
$routes->get('feed', 'Main::feed');
$routes->post('feedPesquisa', 'Main::feedPesquisa');
$routes->get('sair', 'Main::sairS');

$routes->get('login', 'Main::login');
$routes->post('login_sb', 'Main::login_sb');

$routes->get('cadastro', 'Cadastro::cadastro');
$routes->post('cadastro_sb', 'Cadastro::cadastro_sb');

$routes->get('anunciando', 'Anuncio::anunciar');
$routes->post('anunciar_sb', 'Anuncio::anunciar_sb');

$routes->get('seu_perfil', 'Main::perfil');
$routes->post('atualizar', 'Main::atualizar');
$routes->get('deletando_perfil', 'Main::excluir');
$routes->get('confirmacao_delete_perfil', 'Main::confirmacao_delete');