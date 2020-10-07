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

Route::get('/', function () {
    return Redirect::to('login');
});

Auth::routes([
    'verify' => true,
    'reset' => false
]);
// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//     Route::get('/', 'AdminController@index')->name('admin');
// });

// Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
//     Route::get('/', ['as' => 'home', 'uses' => 'UserController@index']);
// });
// Route::group(['prefix' => 'go', 'middleware' => ['auth', 'go']], function () {
//     // Route::get('/', 'GOController@index')->name('go');
//     Route::get('/', ['as' => 'home', 'uses' => 'GOController@index']);
// });
// Route::group(['prefix' => 'observer', 'middleware' => ['auth', 'observer']], function () {
//     // Route::get('/', 'ObserverController@index')->name('observer');
//     Route::get('/', ['as' => 'home', 'uses' => 'ObserverController@index']);
// });

// Route::get('/home', 'HomeController@index')->name('home');
