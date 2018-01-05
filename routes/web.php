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

$router->get('/', function () use ($router) {
    return $router->app->version();
    //return "Simple LumenApp by Arif Rohmadi";
});

$router->group(['prefix' => 'api'], function () use ($router) {
	$router->get('mahasiswa',  ['uses' => 'MahasiswaController@showAllMahasiswa']);
	$router->get('mahasiswa/{id}', 'MahasiswaController@showOneMahasiswa');
	$router->post('mahasiswa',['uses' => 'MahasiswaController@create']);
	$router->put('mahasiswa/{id}',['uses' => 'MahasiswaController@update']);
	$router->delete('mahasiswa/{id}',['uses' => 'MahasiswaController@delete']);

	$router->get('penulis', 'PenulisController@tampilSemuaPenulis');
	$router->get('penulis/{id}','PenulisController@tampilSatuPenulis');
	$router->post('penulis','PenulisController@create');
	$router->delete('penulis/{id}','PenulisCOntroller@delete');
	$router->put('penulis/{id}','PenulisController@update');
});


$router->group(['prefix'=>'api/v1'], function () use ($router){
	$router->get('book', 'BookController@index');
	$router->get('book/{id}', 'BookController@getBook');
	$router->post('book',['uses' => 'BookController@createBook']);
	$router->put('book/{id}',['uses' => 'BookController@updateBook']);
	$router->delete('book/{id}',['uses' => 'BookController@deleteBook']);

});