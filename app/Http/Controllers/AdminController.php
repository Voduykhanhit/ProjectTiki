<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
session_start();
class AdminController extends Controller
{
    public function getLogin(){
        return view('admin.login.loginauth');
    }
    public function CheckLogin(Request $request){
        $account_email = 'OptimusAdmin@tiki.vn';
        $account_password = '123456';
        if($request->email == $account_email && $request->password == $account_password)
        {
            Session::put('name_account',$account_email);
            return redirect('admin/seller/list-seller')->with('thongbao','Đăng nhập thành công');

        }else{
            return redirect()->back()->with('thongbao','Sai tên tài khoản hoặc mật khẩu');
        }
    }
    public function Logout(){
        Session::forget('name_account');
        return redirect('/login');
    }
}
