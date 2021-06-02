<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'Helper.php';

$router = new HotelManager\Router($_SERVER["REQUEST_URI"]);

//GET VIEW
$router->get('/', "AccueilController@index");
$router->get('/stats', "StatsController@index");
$router->get('/pools', "PoolController@index");

// POST
$router->post('/nouveau', "AccueilController@store");


$router->run();
