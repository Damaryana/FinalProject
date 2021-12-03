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
//admin
Route::get('/admin', 'AdminController@indexApp');
Route::post('/admin', 'AdminController@storeApp');
Route::get('/admin/part/{id}','AdminController@indexPart');
Route::post('/admin/part', 'AdminController@storePart');
Route::get('/admin/sub-part/{id}', 'AdminController@indexSubPart');
Route::post('/admin/sub-part', 'AdminController@storeSubPart');
Route::get('/admin/item/{id}', 'AdminController@indexItem');
Route::post('/admin/item', 'AdminController@storeItem');

//website
Route::get('/', 'WebsiteController@index');
Route::get('/manual/{id}', 'BookController@show');
Route::get('/list-manual', 'WebsiteController@show');
Route::post('/sub-part/show', 'BookController@index');
Route::post('/search/part', 'BookController@searchPart');
