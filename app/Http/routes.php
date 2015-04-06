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




Route::get('home', array('as'=>'home', 'uses'=>'HomeController@index'));

Route::get('browsemarket', array('as'=>'browsemarket', 'uses'=>'BrowseMarketController@display_data'));
Route::post('browsemarket/search', array('as'=>'browsemarket/search','uses'=>'BrowseMarketController@search_stock'));
Route::get('browsemarket/buy_stocks/price:{price}/name:{name}', array('as'=>'browsemarket/buy_stocks','uses'=>'BrowseMarketController@show_stock_buy'));
Route::post('browsemarket/buy_stocks_amount', array('as'=>'browsemarket/buy_stocks_amount','uses'=>'BrowseMarketController@stock_buy'));

Route::post('browsemarket/sell_stocks/name:{name}', array('as'=>'browsemarket/sell_stocks','uses'=>'BrowseMarketController@show_stock_sell'));
Route::post('browsemarket/sell_stocks_amount', array('as'=>'browsemarket/sell_stocks_amount','uses'=>'BrowseMarketController@stock_sell'));

//Route::post('browse_market/buy_stocks_amount', 'BrowseMarketController@buy_stock');


Route::get('clientport/display', array('as'=>'clientport/display/', 'uses'=>'ClientController@show'));
Route::get('clientport/display/holdings', array('as'=>'clientport/display/holdings', 'uses'=>'ClientController@display_holdings'));
Route::get('clientport/display/mydetails', array('as'=>'clientport/display/mydetails', 'uses'=>'ClientController@show_deets'));
Route::get('clientport/display/wallet', array('as'=>'clientport/display/wallet', 'uses'=>'WalletController@display_balance'));
Route::get('clientport/display/watchlist', array('as'=>'clientport/display/watchlist', 'uses'=>'ClientController@get_bookmarked'));
Route::get('clientport/display/purchasehistory', array('as'=>'clientport/display/purchasehistory', 'uses'=>'purchasehistorycontroller@purchase_history'));
Route::post('clientport/display/addbalance', array('as'=>'clientport/display/addbalance', 'uses'=>'WalletController@add_balance'));

Route::post('validation', array('as'=>'validation', 'uses'=>'CheckerController@checker'));

Route::get('clientport/display/calendar', array('as'=>'clientport/display/calendar', 'uses'=>'ClientController@view_meetings'));

Route::get('/stocks', 'StocksController@index');

Route::get('/Login', 'LoginController@index');

Route::get('/Calendar','CalendarController@viewCalendar');

Route::get('/FADashboard' , array('as' => '/FADashboard', 'uses' => 'FAController@viewCalendar'));


Route::get('/FAClient','FAController@view_clients');

Route::get('refresh' , array('as' => 'refresh', 'uses' => 'FAController@viewCalendar'));

//Route::get('/PurchaseHistory','purchasehistorycontroller@index');

Route::get('admin_dashboard',  array('as'=>'admin_dashboard', 'uses'=>'AdminController@index'));
Route::get('user/{id}', array('as'=>'user', 'uses'=>'AdminController@view_clients'));

Route::delete('user/delete/{id}', array('as'=>'user/delete','uses'=>'AdminController@delete_user'));

Route::post('admin_dashboard/add', array('as'=>'admin_dashboard/add','uses'=>'AdminController@show_insert_form'));
Route::post('admin_dashboard/addFA', array('as'=>'admin_dashboard/addFA','uses'=>'AdminController@show_FA_insert_form'));

Route::post('admin_dashboard/insert_FA', array('as'=>'admin_dashboard/insertFA','uses'=>'AdminController@insert_FA'));
Route::post('admin_dashboard/insert_user', array('as'=>'admin_dashboard/insert_user','uses'=>'AdminController@insert_user'));


// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
