<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class TrademarkController extends Controller
{
  

    public function add_th()
    {
     
         return view('admin.addthuonghieu');
    }
    public function save_trademark(Request $request)
    {
      $tenthuonghieu=$request->tenthuonghieu;
       $result = DB::insert('insert into tthuonghieu (Ten_thuong_hieu) values (?)', [$tenthuonghieu]);
       if(!empty($result))
       {
         return view('admin.addthuonghieu')->with('error','thanh cong');
       }
       else
       {
         return view('admin.thuonghieu')->with('error', 'Sai tên tài khoản hoặc mật khẩu!');
       }
     }
     public function all_th()
     {
      $all_th= DB::table('tthuonghieu')->get();
   
       $managet = view('admin.allthuonghieu')->with('all_th',$all_th);
 
       return view('admin_layout')->with('admin.allthuonghieu',$managet);
     }
     public function edit_th(Request $request)
     {
     $id=$request->route('id');
     $info = DB::select('select * from thuonghieu where id_thuong_hieu = ?', [$id]);
     $info = $info[0];
     return view('admin.editthuonghieu', compact('info'));
     }
   public function update_th(Request $request)
   {
     $id = $request->route('id');
     $tenthuonghieu = $request['tenthuonghieu'];
     DB::update('update tthuonghieu set Ten_thuong_hieu = ? where id_thuong_hieu= ?', [$tenthuonghieu, $id]);
     echo 'success';
     return redirect('/all_th');
   }
   public function delete_th(Request $request)
   {
     $id = $request->route('id');
     DB::delete('delete from tthuonghieu where id_thuong_hieu = ?', [$id]);
     return redirect('/all_th');
   }
}
