<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;




class UserController extends Controller
{
    public function login()
    {
        $user = Auth::user();
        if (isset($user)) {
            return redirect()->route('home');
        }else {
            return view('frontend.pages.login');
        }
    }

    public function post_login(LoginRequest $req)
    {
        if (Auth::attempt($req->only('email', 'password'))) {
            return redirect()->route('home')->with('success', 'Đăng nhập thành công');
        }else {
            return redirect()->back()->with('error', 'Mật khẩu hoặc email không đúng');
        }
    }

    public function register()
    {
        if (!Auth::check()) {
            return view('frontend.pages.register');
        }else {
            return redirect()->route('home');
        }
    }

    public function post_register(RegisterRequest $req)
    {
        // dd($req->_token);
        $name_avatar = '';
        if (isset($req->avatar)) {
            $avatar = $req->avatar;
            $name_avatar = time().$avatar->getClientOriginalName();
            $avatar->move(base_path('public/uploads/User'), $name_avatar);
        }
        if ($req->password == $req->repassword) {
            $password = bcrypt($req->password);
            User::create([
            'name'=>$req->name,
            'avatar'=>$name_avatar,
            'email'=>$req->email,
            'password'=>$password,
            'gender'=>$req->gender,
            'phone'=>$req->phone,
            'address'=>$req->address,
        ]);
            return redirect()->route('login')->with('success','Đăng ký thành công');
        }else {
            return redirect()->back()->with('error', 'Không trùng mật khẩu');
        }

    }

    public function logout(Request $req)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function post_checkout_login(LoginRequest $req)
    {
        if (Auth::attempt($req->only('email', 'password'))) {
            return redirect()->route('checkout')->with('success', 'Đăng nhập thành công');
        }else {
            return redirect()->back()->with('error', 'Mật khẩu hoặc email không đúng');
        }
    }
    public function post_review_login(LoginRequest $req)
    {
        if (Auth::attempt($req->only('email', 'password'))) {
            return redirect()->back()->with('success', 'Đăng nhập thành công');
        }else {
            return redirect()->back()->with('error', 'Mật khẩu hoặc email không đúng');
        }
    }
    public function post_login_blog(LoginRequest $req)
    {
        if (Auth::attempt($req->only('email', 'password'))) {
            return redirect()->back()->with('success', 'Đăng nhập thành công');
        }else {
            return redirect()->back()->with('error', 'Mật khẩu hoặc email không đúng');
        }
    }
}
