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

Route::get('/', 'LoginController@isLogin');

//Authentication
Route::prefix('/auth')->group(function(){
    //Login
    Route::get('/login', 'LoginController@loginPage');
    //Authenticate
    Route::post('/login', 'LoginController@authenticate');
});

Route::prefix('/stock-management')->group(function(){

});

Route::prefix('/transaction-management')->group(function(){
    Route::get('/cashier', 'CashierController@getPage');
});

Route::prefix('/cms-home')->group(function(){
    Route::get('/', 'HomeController@getPage');
    Route::get('/home', 'HomeController@getHomePage');
});

Route::prefix('/master')->group(function(){
    Route::get('/dynamic-error', 'TemplatePageController@getErrorMessage');
});

Route::prefix('user-management')->group(function(){
    Route::get('/', 'UserController@getPage');
});


//View Only
Route::view('/home', 'dashboard/home');

Route::get('/testGuzzle', 'TestController@get');

