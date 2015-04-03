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


Route::get('browsemarket', array('as'=>'browsemarket', 'uses'=>'BrowseMarketController@display_data'));
Route::post('browsemarket/search', array('as'=>'browsemarket/search','uses'=>'BrowseMarketController@search_stock'));
Route::get('browse_market/buy_stock', 'BrowseMarketController@buy_stock');


Route::get('clientport/display', array('as'=>'clientport/display/', 'uses'=>'ClientController@show'));

Route::get('clientport/display/holdings', array('as'=>'clientport/display/holdings', 'uses'=>'ClientController@display_holdings'));


Route::get('/stocks', 'StocksController@index');
Route::get('/Calendar','CalendarController@index');

Route::get('/FADashboard','FAController@index');

Route::get('admin_dashboard', 'AdminController@index');
Route::get('user/{id}', array('as'=>'user', 'uses'=>'AdminController@view_clients'));

Route::delete('user/delete/{id}', array('as'=>'user/delete','uses'=>'AdminController@delete_user'));

Route::post('admin_dashboard/add', array('as'=>'admin_dashboard/add','uses'=>'AdminController@show_insert_form'));

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
