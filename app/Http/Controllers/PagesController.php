<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{
    //
    public function getGioithieu(){
        return view('gioithieu');
    }
    public function login(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            echo "Thanh cong";
        }
        else
        {
            echo "that bai";
        }
    }
}
