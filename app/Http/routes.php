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

Route::get('/','PagesController@index');

Route::get('products','PagesController@products');

Route::get('services','PagesController@services');

Route::get('ogrupo','PagesController@ogrupo');

Route::get('marcas','PagesController@marcas');

Route::get('contactos','PagesController@contactos');


