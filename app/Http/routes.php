<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


$router->get('/', ['as' => 'index', 'uses' => 'HomeController@index']);

$router->get('admin/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);


$router->post('admin/login', ['as' => 'post_login', 'uses' => 'Auth\AuthController@postLogin']);

$router->get('admin/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
$router->get('admin', ['as' => 'admin.index', 'uses' => 'HomeController@admin']);
