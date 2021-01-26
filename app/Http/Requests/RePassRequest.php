<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RePassRequest extends FormRequest
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
            'password' => 'required|min:8',
            're_password' => 'required|min:8|same:password',
        ];
    }
    public function messages()
    {
        return [
            'password.required'=>'Không được để trống mật khẩu cũ',
            're_password.required'=>'Không được để trống mật khẩu mới',
            'password.min'=>'Mật khẩu không được dưới 8 ký tự',
            're_password.min'=>'Mật khẩu không được dưới 8 ký tự',
            're_password.same'=>'Mật khẩu không trùng khớp',
        ];
    }
}
