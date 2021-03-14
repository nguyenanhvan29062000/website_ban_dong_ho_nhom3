<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class LangController extends Controller
{
  
    public function add()
    {
    
         return view('admin.add');
    }
    public function all()
    {

     $all_sp= DB::table('danhmucsanpham')->get();
  
      $managet = view('admin.all')->with('all_sp',$all_sp);

      return view('admin_layout')->with('admin.all_sp',$managet);
     // return View('admin_layout', compact('managet'));
    }
    public function save_category_product( Request $request)
    {
    
      $tendanhmuc=$request->tendanhmuc;
       $mota=$request->mota;
       $anhien=$request->tinhtrang;
       $result = DB::insert('insert into danhmucsanpham (Ten_danh_muc,Mo_ta,An_hien) values (?,?,?)', [ $tendanhmuc,$mota, $anhien]);
       if(!empty($result))
       {
         return view('admin.add')->with('error','thanh cong');
       }
       else
       {
         return view('admin.add')->with('error', 'Sai tên tài khoản hoặc mật khẩu!');
       }
         /*$data=array();
         $data['Ten_danh_muc']=$request->tendanhmuc;
         $data['Mo_ta']=$request->mota;
         $data['An_hien']=$request->tinhtrang;
       $save=  DB::table('danhmucsanpham')->insert($data);
       return  redirect::to('add);*/
     }
    public function edit(Request $request)
    {
      $id=$request->route('id');
      $info = DB::select('select * from danhmucsanpham where id_danhmucsanpham = ?', [$id]);
      $info = $info[0];
      return view('admin.edit', compact('info'));
      
   /* $edit_sp= DB::table('danhmucsanpham')->where('id',$id)->get();

      $managet = view('admin.edit')->with('edit_sp',$edit_sp);

       return view('admin_layout')->with('admin.edit_sp',$managet);*/
     /* $id=$request->route('id');
      $tendanhmuc='12345';
       DB::update('update danhmucsanpham  set Ten_danh_muc =? where id_danhmucsanpham= ?', [$tendanhmuc,$id]);
       return view('admin.all_sp');*/

     }
    public function update_sp(Request $request)
    {
      $id = $request->route('id');
      $tendanhmuc = $request['tendanhmuc'];
      $mota = $request['mota'];
      $tinhtrang = $request['tinhtrang'];
      DB::update('update danhmucsanpham set Ten_danh_muc = ?, Mo_ta = ?, An_hien = ? where id_danhmucsanpham = ?', [$tendanhmuc, $mota, $tinhtrang, $id]);
      echo 'success';
      return redirect('/all_sp');
    }
    public function delete_sp(Request $request)
    { 
      $id = $request->route('id');
      DB::delete('delete from danhmucsanpham where id_danhmucsanpham = ?', [$id]);
      return redirect('/all_sp');
    }
    }
