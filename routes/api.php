<?php

$router = new Devlob\Routing\Router();

$router->get('/', 'Home\PagesController@home');

$router->post('login', 'Auth\LoginController@login');
$router->post('register', 'Auth\RegisterController@register');
