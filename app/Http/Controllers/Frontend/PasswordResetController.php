<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RePassRequest;


class PasswordResetController extends Controller
{
    public function recoverpass()
    {
        return view('frontend.pages.recoverpass');
    }
    public function sendmail (Request $req)
    {
        // dd($req->email);
        $email = $req->email;
        $check = User::where('email', $email)->first();
        // dd($check);
        if ($check) {
            $passwordReset = new PasswordReset;
            $passwordReset->email = $email;
            // tạo 1 chuỗi token ngẫu nhiên để thêm vào bảng PasswordReset
            $passwordReset->token = Str::random(50);
            $passwordReset->save();
            $token = PasswordReset::where('email', $email)->first()->token;
            $link = url('mat-khau-moi')."/".$token;
            $data=[
                'name'=>$check->name,
                'email'=>$email,
                'link'=>$link,
            ];
            // gửi email
            Mail::send('email.order_email',$data, function ($message) use($data){
                $message->from('tieuabavuong91@gmail.com', 'Shop_juta');
                $message->to($data['email'], $data['name']);
                $message->subject('Hãy nhấn link bên dưới để đặt lại mật khẩu');
            });
            return redirect()->back()->with('success', 'Link yêu cầu đặt lại mật khẩu đã gửi tới '.$email);
        }else {
            return redirect()->back()->with('error', 'Email không tồn tại');
        }
    }
    public function new_pass($token)
    {
        return view('frontend.pages.repass', compact('token'));
    }
    public function post_newPass(RePassRequest $req, $token)
    {
        // dd($token);
        $email = PasswordReset::where('token', $token)->first()->email;
            $user = User::where('email', $email)->first();
            $password = bcrypt($req->password);
            $user->password = $password;
            $user->save();
            // thay đổi mật khẩu mới thành công thì xóa PasswordReset bằng token
            PasswordReset::where('token', $token)->first()->delete();
            return redirect()->route('home')->with('success', 'Đặt lại mật khẩu thành công');
    }
}
