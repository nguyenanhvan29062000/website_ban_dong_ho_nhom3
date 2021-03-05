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
//GET
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', 'PagesController@home');
Route::get('/home/gioithieu', function()
{
    return view('gioithieu');
});
Route::get('/home/dongho/{gender}', function($gender){
    if($gender=='nam'||$gender=='nu') return view('dongho', compact('gender'));
    else abort(404);
});
Route::get('/dongho/{id}/chitiet', function ($id) {
    return view('chitetsanpham', compact('id'));
});
Route::get('/home/dongho/timkiem', function () {
    return view('timkiem');
});
Route::get('/{id}/giohang', 'PagesController@giohang');
Route::get('/logout', 'PagesController@logout');
//POST
Route::post('login', 'PagesController@login');
Route::post('signup', 'PagesController@signup');
