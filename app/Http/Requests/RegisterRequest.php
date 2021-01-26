<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'repassword' => 'required|min:8',
            'phone' => 'required|unique:users|max:15',
            'address' => 'required',
            'avatar' => 'mimes:jpg,jpeg,png,gif'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được bỏ trống',
            'email.required' => 'Email không được bỏ trống',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu không được bỏ trống',
            'repassword.required' => 'Mật khẩu không được bỏ trống',
            'password.min' => 'Mật khẩu phải có đủ 8 ký tự',
            'repassword.min' => 'Mật khẩu phải có đủ 8 ký tự',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'phone.max' => 'Số điện thoại không vượt quá 15 kí tự',
            'address.required' => 'Địa chỉ không được bỏ trống',
            'avatar.mimes'=>'Ảnh phải có đuôi jpg, jpeg, png'
        ];
    }
}
