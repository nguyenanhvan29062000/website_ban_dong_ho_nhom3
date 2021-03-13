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
    //
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
    //
    public function gender(Request $request)
    {
        $gender = $request->route('gender');
        $page = $request->route('page');
        if($gender == 'nam' || $gender = 'nu')
        {
            $sanpham = DB::table('tloaisp')->select('tsanpham.id_sp', 'ten_sp', 'gia_sp', 'gia_sau_sale', 'hang_sx', 'nam_sx', 'image')->join('tsanpham', 'tloaisp.id_sp', '=', 'tsanpham.id_sp')->leftJoin('tgiamgia', 'tsanpham.id_sp', '=', 'tgiamgia.id_sp')->where('gioi_tinh', $gender)->orderBy('tsanpham.id_sp', 'desc')->get();
            $from = NULL;
            $to = NULL;
            $hangsx = NULL;
            $year = NULL;
            if(!empty($request->from)) $from = $request->from;
            if(!empty($request->to)) $to = $request->to;
            if(!empty($request->hangsx)) $hangsx = $request->hangsx;
            if(!empty($request->year)) $year = $request->year;
            $sanpham = $this->fillter($sanpham, $request);
            //mỗi trang chứa 16 sp
            $allsp = count($sanpham);
            if($allsp%16 == 0)
            {
                $numpage = (int)($allsp/16) ;
            }
            else 
            {
                $numpage = (int)($allsp/16) + 1;
            }
            $sp_in_page = 0;
            if($page == $numpage && $allsp%16 != 0) $sp_in_page = $allsp%16;
            elseif($page == $numpage && $allsp%16 == 0) $sp_in_page = 16;
            elseif($page < $numpage) $sp_in_page = 16;
            if($page > 0 && $page <= $numpage)
            {
                if($allsp!=0)
                {
                    for($i = $page * 16 - 16, $j=0; $i < $page * 16&&$j<$sp_in_page; $i++, $j++)
                      { 
                        $listsanpham[$j] = $sanpham[$i];
                    }
                    return view('dongho', compact('listsanpham','gender', 'from', 'to', 'hangsx', 'year', 'numpage', 'page'));
                }
                else
                {
                    echo "Khong co san pham!";
                }
            }
            else
            {
                return "Page notfound!";
            }
        }
        else
        {
            return "Page notfound!";
        }
    }
    public function timkiembyname(Request $request)
    {
        $key = $request['keywords'];
        $from = NULL;
        $to = NULL;
        $hangsx = NULL;
        $year = NULL;
        if(!empty($request->from)) $from = $request->from;
        if(!empty($request->to)) $to = $request->to;
        if(!empty($request->hangsx)) $hangsx = $request->hangsx;
        if(!empty($request->year)) $year = $request->year;
        $listsanpham = DB::table('tsanpham')->select('tsanpham.id_sp', 'ten_sp', 'gia_sp', 'gia_sau_sale', 'hang_sx', 'nam_sx', 'image')->join('tloaisp', 'tsanpham.id_sp', '=', 'tloaisp.id_sp')->leftJoin('tgiamgia', 'tsanpham.id_sp', '=', 'tgiamgia.id_sp')->where('ten_sp','like','%'.$key.'%')->orderBy('ten_sp')->get();
        $listsanpham = $this->fillter($listsanpham, $request);
        return view('dongho', compact('listsanpham', 'key', 'from', 'to', 'hangsx', 'year'));
    }

    public function fillter($listsanpham, $request)
    {
        
        $gia = !empty($request->from) || !empty($request->to);
        $hang = !empty($request->hangsx);
        $year = !empty($request->year);
        if($gia)
        {
            if(empty($request->to))
            {
                $newlist = array();
                foreach($listsanpham as $sanpham)
                {
                    if($request->from <= $sanpham->gia_sp)
                    {
                        $newlist[count($newlist)] = $sanpham;
                    }
                }
                $listsanpham = $newlist;
            }
            else{
                $newlist = array();
                foreach($listsanpham as $sanpham)
                {
                    if($request->from <= $sanpham->gia_sp && $sanpham->gia_sp <= $request->to)
                    {
                        $newlist[count($newlist)] = $sanpham;
                    }
                }
                $listsanpham = $newlist;
            }
        }
        if($hang)
        {
            if($request->hangsx!='all')
            {
                $newlist = array();
                foreach($listsanpham as $sanpham)
                {
                    if($sanpham->hang_sx == $request->hangsx)
                    {
                        $newlist[count($newlist)] = $sanpham;
                    }
                }
                $listsanpham = $newlist;
            }
        }
        
        if($year)
        {
            if($request->year != 'all')
            {
                $newlist = array();
                foreach($listsanpham as $sanpham)
                {
                    if($sanpham->nam_sx == $request->year)
                    {
                        $newlist[count($newlist)] = $sanpham;
                    }
                }
                $listsanpham = $newlist;
            }
        }
        return $listsanpham;
    }
}
