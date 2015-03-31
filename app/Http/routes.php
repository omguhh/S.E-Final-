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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('browse_market', 'BrowseMarketController@display_data');

Route::get('/stocks', 'StocksController@index');

Route::get('/FADashboard','FAController@index');

Route::get('admin_dashboard', 'AdminController@index');
Route::get('user/{id}', array('as'=>'user', 'uses'=>'AdminController@view_clients'));

Route::post('browse_market/search', array('as'=>'browse_market/search','uses'=>'BrowseMarketController@search_stock'));
Route::delete('user/delete/{id}', array('as'=>'user/delete','uses'=>'AdminController@delete_user'));
Route::get('browse_market/buy_stock', 'BrowseMarketController@buy_stock');
//Route::get('admin_dashboard/addclient', 'AdminController@insert_user');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
