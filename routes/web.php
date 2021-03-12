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
Route::get('/home/dongho/{gender}/{page}', 'PagesController@gender');
Route::post('/home/dongho/{gender}/{page}', 'PagesController@gender');
Route::get('/dongho/{id}/chitiet', function ($id) {
    return view('chitetsanpham', compact('id'));
});
Route::post('/home/dongho/timkiem', 'PagesController@timkiembyname');
Route::get('/home/lienhe', function()
{
    return view('lienhe');
});
Route::get('/home/giohang', 'PagesController@giohang');
Route::get('/logout', 'PagesController@logout');
//POST
Route::post('login', 'PagesController@login');
Route::post('signup', 'PagesController@signup');

Route::post('/buy/{id}', 'PagesController@btnBuy');
Route::post('/home/delgiohang', 'DatabasesController@delGioHang');
Route::post('/home/giohang/btnleft', 'DatabasesController@btnLeftGioHang');
Route::post('/home/giohang/btnright', 'DatabasesController@btnRightGioHang');
Route::post('/home/giohang/buyone', 'PagesController@buyone');
Route::post('/home/giohang/buyall', 'PagesController@buyall');

Route::post('/home/dongho/fillter', 'PagesController@fillter');
