<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBlogRequest extends FormRequest
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
            'name' => 'required|max:100',
            'slug' => 'required|unique:blogs|max:100',
            'image' => 'required',
            'content' => 'required',
            'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Tiêu đề không được bỏ trống',
            'name.max' =>'Tiêu đề không vượt quá 100 kí tự',
            'slug.required' =>'slug không được bỏ trống',
            'slug.unique' =>'slug đã tồn tại',
            'slug.max' =>'slug không vượt quá 100 kí tự',
            'image.required' =>'Ảnh không được bỏ trống',
            'content.required' =>'Nội dung không được bỏ trống',
            'description.required' =>'Mô tả không được bỏ trống',
        ];
    }
}
