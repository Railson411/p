<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/Login', 'LoginController@signin');
$router->get('/cadastro', 'LoginController@signup');