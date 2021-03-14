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

Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::get('/logout', 'AdminController@logout');
Route::post('/admin-dashboard', 'AdminController@dashboard');
// danh muc san pham
Route::get('/add_sp', 'LangController@add');
Route::get('/all_sp', 'LangController@all');
Route::get('/edit_sp/{id}', 'LangController@edit');
Route::post('/update_sp/{id}', 'LangController@update_sp');
Route::get('/delete_sp/{id}', 'LangController@delete_sp');
// danh muc thuong hieu
Route::get('/add_th','TrademarkController@add_th');
Route::get('/all_th', 'TrademarkController@all_th');
Route::get('/edit_th/{id}','TrademarkController@edit_th');
Route::post('/update_th/{id}','TrademarkController@update_th');
Route::get('/delete_th/{id}', 'TrademarkController@delete_th');
// san pham
Route::get('/add_hh','ProductController@add_hh');
Route::get('/all_hh', 'ProductController@all_hh');
Route::get('/edit_hh/{id}','ProductController@edit_hh');
Route::post('/update_hh/{id}','ProductController@update_hh');
Route::get('/delete_hh/{id}', 'ProductController@delete_hh');

Route::post('/save-category-product', 'LangController@save_category_product');
Route::post('/save-trademark', 'TrademarkController@save_trademark');
Route::post('/save-product', 'ProductController@save_product');

