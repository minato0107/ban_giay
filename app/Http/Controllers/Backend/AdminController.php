<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    public function index()
    {
            return view('backend.admin');
    }
    public function login()
    {
        return view('backend.login');
    }
    public function post_login(Request $req)
    {
        // dd($req->all());
        $email = $req->email;
        $password = $req->password;
       $admin= Admin::where('email','=',$req->email)->first();
       if (empty($admin)) {
            return redirect()->back()->with('error', 'Sai email');
       }else {
            if(Hash::check($password,$admin->password)) {
                Session::put('admin',$admin);
                return redirect()->route('admin')->with('success', 'Đăng nhập thành công');
            } else {
                return redirect()->back()->with('error', 'Sai mật khẩu');
            }
       }

    }
    public function logout()
    {
        Session::forget('admin');
        return redirect()->route('admin.login')->with('success', 'Đăng xuất thành công');
    }
    public function user_manager()
    {
        $all = User::all();
        // dd($all);
        return view('backend.user.index', compact('all'));
    }
    public function delete_user($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'Xóa người dùng thành công');
    }
}
