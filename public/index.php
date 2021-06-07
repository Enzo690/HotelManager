<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'Helper.php';

$router = new HotelManager\Router($_SERVER["REQUEST_URI"]);

//GET VIEWS
$router->get('/', "AccueilController@index");
$router->get('/pools', "PoolController@index");
$router->get('/client', "ClientController@index");
$router->get('/order', "OrderController@index");
$router->get('/room', "RoomController@index");
$router->get('/stock', "StockController@index");

// API VIEWS

$router->get('api/pools', "PoolController@all");
$router->get('api/client', "ClientController@all");
$router->get('api/order', "OrderController@all");
$router->get('api/room', "RoomController@all");
$router->get('api/stock', "StockController@all");

// POST
$router->post('/api/newmember', "ClientController@store");


$router->run();
