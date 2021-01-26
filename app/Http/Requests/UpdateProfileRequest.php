<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'email' => 'required',
            'phone' => 'required|max:15',
            'address' => 'required',
            'avatar' => 'mimes:jpg,jpeg,png,gif'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được bỏ trống',
            'email.required' => 'Email không được bỏ trống',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'phone.max' => 'Số điện thoại không vượt quá 15 kí tự',
            'address.required' => 'Địa chỉ không được bỏ trống',
            'avatar.mimes'=>'Ảnh không đúng định dạng'
        ];
    }
}
