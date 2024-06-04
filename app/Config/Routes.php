<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->match(['get', 'post'], 'register', 'Auth::register');

$routes->match(['get', 'post'], 'login', 'Auth::login');

$routes->match(['get', 'post'], 'userlogin', 'Auth::userlogin');

$routes->match(['get', 'post'], 'save', 'Auth::save');

$routes->get('logout', 'Auth::logout');

$routes->group('', ['filter' => 'auth'], static function($routes){

    $routes->get('profile', 'Auth::profile', ['as' => 'profile']);

    $routes->get('change_password_view', 'Auth::change_password_view', ['as' => 'change_password_view']);

    $routes->post('change_password', 'Auth::change_password');

    // dashboard links 

    $routes->get('cartegrise', 'Dashboard::cartegrise', ['as' => 'cartegrise']);

    $routes->get('carteblue', 'Dashboard::carteblue', ['as' => 'carteblue']);

    $routes->get('new-cartegrise', 'Dashboard::CartegriseForm', ['as' => 'add_cartegrise']);

    $routes->get('new-carteblue', 'Dashboard::CarteblueForm', ['as' => 'add_carteblue']);

    $routes->post('save_carteblue', 'Dashboard::save_carteblue');

    $routes->post('save_cartegrise', 'Dashboard::save_cartegrise');

    $routes->match(['get', 'post'], 'verification_cartegrisedata', 'Dashboard::verification_cartegrisedata');

    $routes->get('verification_cartegrise/(:num)', 'Dashboard::verification_cartegrise/$1');

    $routes->get('payment', 'Dashboard::payment');

    $routes->get('demande', 'Dashboard::demande', ['as' => 'demande']);
    $routes->post('add-demande', 'Dashboard::AddDemande', ['as' => 'add_demande']);

});

