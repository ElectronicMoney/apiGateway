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


//Authors Micro Service Routes
$router->get('/v1/authors', 'AuthorMicroService\AuthorController@index');
$router->post('/v1/authors', 'AuthorMicroService\AuthorController@store');
$router->get('/v1/authors/{author}', 'AuthorMicroService\AuthorController@show');
$router->put('/v1/authors/{author}', 'AuthorMicroService\AuthorController@update');
$router->patch('/v1/authors/{author}', 'AuthorMicroService\AuthorController@update');
$router->delete('/v1/authors/{author}', 'AuthorMicroService\AuthorController@destroy');

//Books Micro Service Routes
$router->get('/v1/books', 'BookMicroService\BookController@index');
$router->post('/v1/books', 'BookMicroService\BookController@store');
$router->get('/v1/books/{book}', 'BookMicroService\BookController@show');
$router->put('/v1/books/{book}', 'BookMicroService\BookController@update');
$router->patch('/v1/books/{book}', 'BookMicroService\BookController@update');
$router->delete('/v1/books/{book}', 'BookMicroService\BookController@destroy');

