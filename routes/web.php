<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/** @var \Laravel\Lumen\Routing\Router @router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

/* Grupos de Rota */

$router->group(
    ['prefix' => '/api'],
    function() use ($router) {
        $router->get('regras', 'RegrasController@index');
        $router->post('regras', 'RegrasController@store');

        $router->get('categorias', 'CategoriasController@index');
        $router->get('categorias/{id}', 'CategoriasController@show');
        $router->post('categorias', 'CategoriasController@store');
        $router->put('categorias/{id}', 'CategoriasController@update');
        $router->delete('categorias/{id}', 'CategoriasController@destroy');
});