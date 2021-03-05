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
    public function signup(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $password = $request['password'];
        $password = Crypt::encrypt($password);
        
        {
            DB::insert('insert into users (name, email, password, created_at) values (?, ?, ?, ?)', [$name, $email, $password, date("Y-m-d h:i:s")]);
            return 'succes';
        }
    }
    public function login(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        $isSave = $request['savepass'];
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            Cookie::queue('login_token', $email);
            $typeUser = DB::select('select * from users where email = ?', [$email]);
            foreach($typeUser as $value)
            {
                Cookie::queue('name', $value->name);
                if($value->loai_tk=='user')
                {
                    return redirect('/home');
                }
                if($value->loai_tk=='adder')
                {
                    return view('adder');
                }
            }
        }
        else
        {
            echo "that bai";
        }
    }

    public function logout()
    {
        Cookie::queue(
            Cookie::forget('login_token')
        );
        Cookie::queue(
            Cookie::forget('name')
        );
        return redirect('/home');
    }

    public function home()
    {
        $sanphamhot = DB::table('thomehot')->get();
        $sanphamnew = DB::table('thomenew')->get();
        $sanphamsale = DB::table('thomesale')->get();
        return view('trangchu', compact('sanphamhot', 'sanphamnew', 'sanphamsale'));
    }

    public function giohang(Request $request)
    {
        $tenngdung = $request->route('id');
        $giohang = DB::select('select * from tgiohang where name = ?', $tenngdung);
        $sanpham = array();
        for($i = 0; $i < count($giohang); $i++)
        {
            $sanpham[$i] = DB::select('select * from tsanpham where id_sp = ?', [$giohang[$i]->id_sp]);
        }
        return view('giohang', compact('giohang', 'sanpham'));
    }
}
