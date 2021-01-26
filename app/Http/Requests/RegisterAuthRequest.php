<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:admins',
            'email' => 'required|unique:admins',
            'password' => 'required|min:8',
            'repassword' => 'required|min:8|same:password',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được bỏ trống',
            'name.unique' => 'Tên đã tồn tại',
            'email.required' => 'Email không được bỏ trống',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu không được bỏ trống',
            'repassword.required' => 'Mật khẩu không được bỏ trống',
            'password.min' => 'Mật khẩu phải có đủ 8 ký tự',
            'repassword.min' => 'Mật khẩu phải có đủ 8 ký tự',
            'repassword.same' => 'Mật khẩu không trùng khớp',
        ];
    }
}
