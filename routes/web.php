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
    Route::get('/logout', 'LoginController@logout');
});

Route::prefix('/stock-management')->group(function(){

});

Route::prefix('/transaction-management')->group(function(){
    Route::get('/', 'TransactionController@getPage');

    //Cashier
    Route::get('/cashier', 'TransactionController@cashierPage');
});

Route::prefix('/inventory-management')->group(function(){
    Route::get('/list', 'InventoryController@stockListPage');
});

Route::prefix('/cms')->group(function(){
    Route::get('/', 'HomeController@getPage');
    Route::get('/home', 'HomeController@getHomePage');
});

Route::prefix('/master')->group(function(){
    Route::get('/dynamic-error', 'TemplatePageController@getErrorMessage');

    Route::put('/save-current-page', 'TemplatePageController@saveCurrentPage');
});

Route::prefix('user-management')->group(function(){
    Route::get('/', 'UserController@getPage');

    Route::get('/list', 'UserController@getUserListPage');
    Route::get('/addUser', 'UserController@addUserPage');

    //Functions
    //Get
    Route::get('/detail', 'UserController@getUserDetailPage');

    //Delete
    Route::delete('/delete', 'UserController@deleteUser');
});

Route::prefix('role-management')->group(function(){
    Route::get('/list', 'RoleController@getPage');

    //Functions
    //Get
    Route::get('/detail', 'RoleController@getRoleDetailModal');

    //Delete
    Route::delete('/delete', 'RoleController@deleteRole');

    //Put
    Route::put('/update', 'RoleController@updateRole');

    //Post
    Route::post('/create', 'RoleController@createRole');
});


//View Only
Route::view('/home', 'dashboard/home');
