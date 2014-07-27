<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@home'));
Route::get('/contactenos', array('as' => 'contact', 'uses' => 'HomeController@contact'));
Route::get('/ps/{category?}', array('as' => 'products', 'uses' => 'ProductsController@index'));
Route::get('/p/{id?}', array('as' => 'product', 'uses' => 'ProductsController@show'));

Route::get('/dev', 'DevController@index');

