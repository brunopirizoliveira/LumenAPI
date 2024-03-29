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

$router->group(['prefix' => '/api', 'middleware' => 'autenticador'], function() use ($router) {

    $router->group(['prefix' => '/regras'], function() use($router) {
        $router->get('', 'RegrasController@index');
        $router->post('', 'RegrasController@store');
        $router->get('{id}', 'RegrasController@show');
        $router->put('{id}', 'RegrasController@update');
        $router->delete('{id}', 'RegrasController@destroy');
    });

    $router->group(['prefix' => '/categorias'], function() use($router) {
        $router->get('', 'CategoriasController@index');
        $router->get('{id}', 'CategoriasController@show');
        $router->post('', 'CategoriasController@store');
        $router->put('{id}', 'CategoriasController@update');
        $router->delete('{id}', 'CategoriasController@destroy');

        $router->get('{categoria_id}/regras', 'RegrasController@regrasPorCategoria');
    });

});

$router->post('/api/login', 'TokenController@gerarToken');