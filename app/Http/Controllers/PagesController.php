<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Cookie;
use Hash;
use Crypt;
class PagesController extends Controller
{
    //
    public function signup(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $password = $request['password'];
        $password = Hash::make($password);
        
        {
            DB::insert('insert into users (name, email, password, created_at) values (?, ?, ?, ?)', [$name, $email, $password, date("Y-m-d h:i:s")]);
            return 'succes';
        }
    }
    public function login(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        //$isSave = $request['savepass'];
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
    public function checkcart()
    {
        $name = Cookie::get('name');
        $email = Cookie::get('login_token');
        $cart = DB::select('select so_luong from tgiohang where name = ?', [$name]);
        $checklogin = DB::select('select * from users where email = ? and name = ?', [$email, $name]);
        if($checklogin)
        {
            $sumcart = 0;
            foreach($cart as $value)
            {
                $sumcart += $value->so_luong;
            }
            setcookie('sumcart', $sumcart, time()+3600*24, '/');
        }
        else setcookie('sumcart', 0, time()+3600*24, '/');
    }
    public function home()
    {
        $this->checkcart();
        $sanphamhot = DB::table('thomehot')->get();
        $sanphamnew = DB::table('thomenew')->get();
        $sanphamsale = DB::table('thomesale')->get();
        $baiviet = DB::table('thomebaiviet')->orderBy('id', 'desc')->take(4)->get();
        return view('trangchu', compact('sanphamhot', 'sanphamnew', 'sanphamsale', 'baiviet'));
    }

    public function giohang(Request $request)
    {
        $this->checkcart();
        $tenngdung = Cookie::get('name');
        $giohang = DB::select('select * from tgiohang where name = ?', [$tenngdung]);
        $sanpham = array();
        for($i = 0; $i < count($giohang); $i++)
        {
            $sanpham[$i] = DB::select('select * from tsanpham where id_sp = ?', [$giohang[$i]->id_sp]);
        }
        return view('giohang', compact('giohang', 'sanpham'));
    }
    public function maskmonney($value)
    {
        if($value < 1000000)
        {
            $first = substr($value, 0, strlen($value)-3);
            $second = substr($value, strlen($value)-3);
            return $first.'.'.$second;
        }
        else
        {
            $first = substr($value, 0, strlen($value)-6);
            $second = substr($value, strlen($value)-6, 3);
            $last = substr($value, strlen($value)-3);
            return $first.'.'.$second.'.'.$last;
        }
    }
    public function btnBuy(Request $request)
    {   
        $id = $request->route('id');
        $name = Cookie::get('name');
        $soluong = DB::select('select so_luong from tgiohang where name = ? and id_sp = ?', [$name, $id]);
        if(!empty($soluong))
        {
            DB::update('update tgiohang set so_luong = ? where name = ? and id_sp = ?', [$soluong[0]->so_luong+1, $name, $id]);
        }
        else
        {
            DB::insert('insert into tgiohang (name, id_sp, so_luong) values (?, ?, ?)', [$name, $id, 1]);
        }
        $this->checkcart();
    }
    public function buyone(Request $request)
    {
        $id = $request['id_sp'];
        $name = Cookie::get('name');
        $info = DB::select('select * from tgiohang where name = ? and id_sp = ?', [$name, $id]);
        foreach($info as $value)
        {
            print_r($value);
        }
    }
    public function buyall(Request $request)
    {
        $id = $request['id_sp'];
        $name = Cookie::get('name');
        foreach($id as $id_sp)
        {
            $info = DB::select('select * from tgiohang where name = ? and id_sp = ?', [$name, $id_sp]);
            foreach($info as $value)
            {
                print_r($value);
                echo "<br>";
            }
        }
    }
}
