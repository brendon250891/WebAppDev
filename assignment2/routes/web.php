<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Resource routes includes.
 */
Route::resource('user', 'UserController')->only(['show', 'update']);
Route::resource('dish', 'DishController')->middleware('auth');
Route::resource('cart', 'CartController')->middleware('auth');
Route::resource('order', 'OrderController')->middleware('auth');
Route::resource('cartDish', 'CartDishController');

Route::get('/', function () {
    return view('main');
});

/**
 * Automatically generated auth routes.
 */
Auth::routes();

/**
 * Base site routes.
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Displays a listing of all restaurants.
 */
Route::get('/restaurants', 'HomeController@restaurants');

/**
 * Allows a regiseterd user or guest to view the dishes of a restaurant. 
 */
Route::get('/restaurant/{id}', 'HomeController@viewRestaurant');

/**
 * Shows the documentation for the assignment.
 */
Route::get('/documentation', 'HomeController@documentation');

/**
 * Shows the orders that conusmers have made and that restaurants have received.
 */
Route::get('user/orders/{id}', 'UserController@orders');

/**
 * Shows the top 5 most popular dishes of the month.
 */
Route::get('/popularDishes', 'HomeController@popular');

/**
 * Shows the sales statistics for a restaurant.
 */
Route::get('user/statistics/{id}', 'UserController@sales');

/**
 * Takes the adminstrator to a page that has pending restaurant requests.
 */
Route::get('user/administrator/{id}', 'UserController@administrator');



