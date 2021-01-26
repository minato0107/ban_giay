<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories|max:100',
            'slug' => 'required|unique:categories|max:100'
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Tên danh mục không được bỏ trống',
            'name.unique' =>'Tên danh mục đã tồn tại',
            'name.max' =>'Tên danh mục không vượt quá 100 kí tự',
            'slug.required' =>'slug không được bỏ trống',
            'slug.unique' =>'slug đã tồn tại',
            'slug.max' =>'slug không vượt quá 100 kí tự'
        ];
    }
}
