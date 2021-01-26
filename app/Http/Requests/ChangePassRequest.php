<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassRequest extends FormRequest
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
            'old_pass' => 'required',
            'new_pass' => 'required',
            're_new_pass' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'old_pass.required'=>'Không được để trống mật khẩu cũ',
            'new_pass.required'=>'Không được để trống mật khẩu mới',
            're_new_pass.required'=>'Không được để trống mật khẩu mới nhập lại'
        ];
    }
}
