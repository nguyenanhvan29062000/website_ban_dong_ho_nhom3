<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
  public function Authlogin()
  {
    $id=Session::get('id');
    if($id)
    {
      return redirect::to('dashboard');
    }
    else{
      return redirect('/admin')->send();
    }

  }
    public function add_hh()
    {

      $trade_product =DB::table('tthuonghieu')->get();

      return view('admin.addsanpham')->with('trade_product',$trade_product);
    }
    public function save_product(Request $request)
    {
      
      //data tsanpham
      $data0=array();
         $data0['ten_sp']=$request->tensanpham;
         $data0['gia_sp']=$request->giasanpham;
         $data0['kho_hang']=$request->khohang;
        $file = $request->hinhanh;
        $random = $this->generateRandomString();
        while(file_exists(public_path().'/images/'.'.'.$random.$file->getClientOriginalExtension()))
        {
          $random = generateRandomString();
        }
        if($file->move('images', $random.'.'.$file->getClientOriginalExtension()))
        {
          $data0['image'] = $random.'.'.$file->getClientOriginalExtension();
        }
        else echo 'faile';
        DB::table('tsanpham')->insert($data0);
        //get id
        $id = DB::table('tsanpham')->select('id_sp')->orderBy('id_sp', 'desc')->take(1)->get();
        $id = $id[0]->id_sp;
      //data tloaisp
      $data1 = array();
        $data1['id_sp'] = $id;
        $data1['hang_sx']=$request->product_trade;
        $data1['nam_sx']=$request->namsx;
        $data1['gioi_tinh']=$request->product_cate;
        DB::table('tloaisp')->insert($data1);
      //data bài viết
      $data2 = array();
        $data['n_dung_bv']=$request->mota;
        $data['tieu_de_bv']=$request->noidung;
        DB::table('tbaiviet')->insert($data2);
      return redirect('/add_hh');

      
  }
public function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
     public function all_hh()
     {
    
      $all_hh= DB::table('tsanpham')->join('tloaisp', 'tsanpham.id_sp', '=', 'tloaisp.id_sp')->orderby('tsanpham.id_sp','desc')->get();
     // ->join('danhmucsanpham','danhmucsanpham.id_danhmucsanpham','=','sanpham.id_danhmucsanpham')
      //->join('thuonghieu','thuonghieu.id_thuong_hieu','=','sanpham.id_thuong_hieu')
      
       $managet = view('admin.allsanpham')->with('all_hh',$all_hh);
 
       return view('admin_layout')->with('admin.allsanpham',$managet);
     }
     public function edit_hh(Request $request)
     {
    
     $id=$request->route('id');
     $info = DB::select('select * from sanpham where id_san_pham = ?', [$id]);
     $info = $info[0];
     return view('admin.editsanpham', compact('info'));
     }
   public function update_hh(Request $request)
   {
     $id = $request->route('id');
     $data['id_danhmucsanpham']=$request->product_trade;
     $data['id_thuong_hieu']=$request->product_cate;
       $data['Ten_san_pham']=$request->tensanpham;
       $data['Gia']=$request->giasanpham;
       $data['Noi_dung_san_pham']=$request->noidung;
       $data['Mo_ta']=$request->mota;
       $data['An_hien']=$request->tinhtrang;
      $file = $request->hinhanh;
      DB::table('sanpham')->update($data);
   //DB::update('update sanpham set Ten_san_pham = ?, Mo_ta = ?, An_hien = ? Hinh_anh=? , Gia=? , id_danhmucsanpham =?, id_thuong_hieu=?,Noi_dung_san_pham=? where id_thuong_hieu= ?', [$tensanpham, $mota, $tinhtrang,$, $id]);
     echo 'success';
     return redirect('/all_hh');
   }
   public function delete_hh(Request $request)
   {
     $id = $request->route('id'); 
     DB::delete('delete from tsanpham where id_sp = ?', [$id]);
     return redirect('/all_hh');
   }
}
