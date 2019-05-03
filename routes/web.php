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
$router->get('/authors', 'AuthorMicroService\AuthorController@index');
$router->post('/authors', 'AuthorMicroService\AuthorController@store');
$router->get('/authors/{author}', 'AuthorMicroService\AuthorController@show');
$router->put('/authors/{author}', 'AuthorMicroService\AuthorController@update');
$router->patch('/authors/{author}', 'AuthorMicroService\AuthorController@update');
$router->delete('/authors/{author}', 'AuthorMicroService\AuthorController@destroy');

//Books Micro Service Routes
$router->get('/books', 'BookMicroService\BookController@index');
$router->post('/books', 'BookMicroService\BookController@store');
$router->get('/books/{book}', 'BookMicroService\BookController@show');
$router->put('/books/{book}', 'BookMicroService\BookController@update');
$router->patch('/books/{book}', 'BookMicroService\BookController@update');
$router->delete('/books/{book}', 'BookMicroService\BookController@destroy');

