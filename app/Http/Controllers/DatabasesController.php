<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use DB;
class DatabasesController extends Controller
{
    //
    public function delGioHang(Request $request)
    {   
        $name = Cookie::get('name');
        $id = $request['id'];
        $result = DB::delete('delete from tgiohang where name = ? and id_sp = ?', [$name, $id]);
        if($result) return true;
        else return false;

    }
    public function btnLeftGioHang(Request $request)
    {
        $name = Cookie::get('name');
        $id = $request['id'];
        $soluong = $request['soluong'];
        if($soluong>1)
        {
            $result = DB::update('update tgiohang set so_luong = ? where name = ? and id_sp = ?', [$soluong-1, $name, $id]);
            if($result) return true;
            else return false;
        }
        else return false;
    }
    public function btnRightGioHang(Request $request)
    {
        $name = Cookie::get('name');
        $id = $request['id'];
        $soluong = $request['soluong'];
        $result = DB::update('update tgiohang set so_luong = ? where name = ? and id_sp = ?', [$soluong+1, $name, $id]);
        if($result) return true;
        else return false;
    }
}
