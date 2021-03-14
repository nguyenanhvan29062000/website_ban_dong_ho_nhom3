<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
 
class  AdminController extends Controller
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
    public function index()
    {
 
      return view('admin_login');
    }
    public function show_dashboard()
    {
      $this->Authlogin();
      return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
      $email = $request->email;
      $pass  =  $request->pass;

   $result = DB::select("select * from admin where admin_email =? and admin_password = ?", [$email, $pass]);
      if(!empty($result))
      {
        return view('admin.dashboard');
      }
      else
      {
        return view('admin_login')->with('error', 'Sai tên tài khoản hoặc mật khẩu!');
      }
    }
    public function logout()
    {
      $this->Authlogin();
      return redirect('/admin');
    }

}
