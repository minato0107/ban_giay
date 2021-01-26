<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use App\Models\Product_detail;
use Hash;
use App\Http\Requests\ChangePassRequest;



class ProfileController extends Controller
{
    public function profile($id)
    {
        if (Auth::check()) {
            return view('frontend.profile.profile');
        }else {
            return redirect()->route('home');
        }
    }
     public function post_profile(UpdateProfileRequest $req, $id)
    {
        if (Auth::check()) {
            $user = User::find($id);
            if (!empty($req->avatar)) {
                $name = $user->avatar;
                unlink(base_path('public/uploads/User/'.$name));
                $avatar = $req->avatar;
                $name_avatar = time().$avatar->getClientOriginalName();
                $avatar->move(base_path('public/uploads/User'), $name_avatar);
                $user->avatar = $name_avatar;
            }
            $user->name = $req->name;
            $user->email = $req->email;
            $user->gender =(int) $req->gender;
            $user->phone = $req->phone;
            $user->address = $req->address;
            $user->save();
            return redirect()->back()->with('success', 'Cập nhật thành công');
        }else {
            return redirect()->route('home');
        }

    }
    public function change_pass()
    {
        if (Auth::check()) {

        return view('frontend.profile.change_pass');
        }else {
            return redirect()->route('home');
        }
    }
    public function post_change_pass(Request $req, $id)
    {
        $user = User::find($id);
        $old_pass = $user->password;
        if(Hash::check($req->old_pass, $old_pass)){
            $new_pass = $req->new_pass;
            $re_new_pass = $req->re_new_pass;
            if ($new_pass = $re_new_pass) {
                $user->password = Hash::make($new_pass);
                $user->save();
                return redirect()->back()->with('success', 'Thay đổi mật khẩu thành công');
            }else{
                return redirect()->back()->with('error', 'Mật khẩu mới không giống nhau');
            }
        }else{
            return redirect()->back()->with('error', 'Mật khẩu cũ không khớp');
        }
    }
    public function order($id)
    {
        $order_user = Order::where('id_user', $id)->where('status','!=',3)->orderby('created_at', 'desc')->get();
        // dd($order_user);
        return view('frontend.profile.order', compact('order_user'));
    }
    public function update_status(Request $req, $id_order)
    {
        // dd($req->all());
        $order_user = Order::find($id_order);
        $order_user->status = $req->status;
        $order_user->save();
        return redirect()->back();
    }
    public function history($id)
    {
        $history = Order::where('id_user', $id)->where('status', 3)->get();
        return view('frontend.profile.history', compact('history'));
    }
}
