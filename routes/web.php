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
Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor')->group(function () {
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
    Route::resource('/posts', 'PostController');
    Route::resource('/categories', 'CategoriesController');
});

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/tehno_monitor/{slug}', 'BlogController@show');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/tehno_monitor', 'BlogController@index');
Route::get('/home', 'HomeController@index');
Route::get('/consultanta', 'ConsultController@index');
Route::get('/resurse', 'HomeController@resurse');
Route::get('/confidentialitate', 'ConsultController@index');
Route::get('/cinesunt', 'HomeController@cinesunt');
Route::get('/cookies', 'HomeController@cookies');
Route::get('/contact', 'HomeController@contact');
Route::get('/mergedatabases', 'PostController@mergeDatabases');
Route::get('/locale', 'HomeController@locale');
