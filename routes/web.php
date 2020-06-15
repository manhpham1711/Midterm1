<?php

use Illuminate\Support\Facades\Route;

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
	return view('welcome');
});

Route::get('/index', 'Admin\AdminController@index')->name('index');
Route::get('/index/add', 'Admin\AdminController@form_add')->name('admin.add');
Route::post('/admin/add', 'Admin\AdminController@add');