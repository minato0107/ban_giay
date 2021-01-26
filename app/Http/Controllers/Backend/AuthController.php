<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\RegisterAuthRequest;


class AuthController extends Controller
{
    public function register_auth()
    {
        return view('backend.register_auth');
    }
    public function post_register_auth(RegisterAuthRequest $req)
    {
        dd($req->all());
        $admin = new Admin;
        $admin->name = $req->name;
        $admin->name = $req->email;
        $admin->name = bcrypt($req->password);
        $admin->save();
        return redirect()->back()->with('success', 'Tạo tài khoản quản trị thành công');
    }
}
