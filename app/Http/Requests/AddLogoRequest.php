<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddLogoRequest extends FormRequest
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
            'name' => 'required|unique:configs',
            'slug' => 'required|unique:configs',
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Tên logo không được bỏ trống',
            'name.unique' =>'Tên logo đã tồn tại',
            'slug.required' =>'slug không được bỏ trống',
            'slug.unique' =>'slug đã tồn tại',
        ];
    }
}
