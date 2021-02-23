<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Cookie;
//use Hash;
use Crypt;
class PagesController extends Controller
{
    //
    public function index()
    {
        $tokken = Cookie::get('login_token');
        if(!empty($tokken))
        {
            $tokken = Crypt::decrypt($tokken);
            return View('trangchu', compact('tokken'));
        }
        else{
            return view('trangchu');
        }
    }
    public function getGioithieu(){
        return view('gioithieu');
    }
    public function login(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            Cookie::queue('login_token', Crypt::encrypt($email));
            $typeUser = DB::select('select loai_tk from users where email = ?', [$email]);
            foreach($typeUser as $value)
            {
                if($value->loai_tk=='user')
                {
                    return redirect('/home');
                }
            }
        }
        else
        {
            echo "that bai";
        }
    }
}
