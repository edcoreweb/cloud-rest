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

$app->get('items', 'ItemController@index');
$app->get('items/{id}', 'ItemController@show');
$app->post('items', 'ItemController@store');
$app->put('items/{id}', 'ItemController@update');
$app->delete('items/{id}', 'ItemController@destroy');
