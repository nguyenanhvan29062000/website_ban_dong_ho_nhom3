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
Route::get('/', 'PagesController@index');
Route::get('/home', function () {
    return view('trangchu');
});


Route::get('/gioi-thieu', 'PagesController@getGioithieu');

Route::get('/dangnhaptaikhoan', function () {
    return view('gioithieu');
});
Route::post('login', 'PagesController@login');
