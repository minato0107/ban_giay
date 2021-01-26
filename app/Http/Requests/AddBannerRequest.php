<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBannerRequest extends FormRequest
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
            'slug' => 'required|unique:banners',
            'image' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Tiêu đề không được bỏ trống',
            'slug.required' =>'slug không được bỏ trống',
            'slug.unique' =>'slug đã tồn tại',
            'image.required' =>'Ảnh không được bỏ trống',
        ];
    }
}
