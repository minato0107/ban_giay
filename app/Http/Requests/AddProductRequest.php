<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'name' => 'required|unique:products|max:255',
            'slug' => 'required|unique:products|max:255',
            'sku' => 'required|unique:products|max:255',
            'id_cate' => 'required',
            'price' => 'required',
            'image' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Tên sản phẩm không được bỏ trống',
            'name.unique' =>'Tên sản phẩm đã tồn tại',
            'name.max' =>'Tên sản phẩm không vượt quá 255 kí tự',
            'slug.required' =>'Slug không được bỏ trống',
            'slug.unique' =>'Slug đã tồn tại',
            'slug.max' =>'Slug không vượt quá 255 kí tự',
            'sku.required' =>'Mã sản phẩm không được bỏ trống',
            'sku.unique' =>'Mã sản phẩm đã tồn tại',
            'sku.max' =>'Mã sản phẩm không vượt quá 255 kí tự',
            'id_cate.required' =>'Tên danh mục không được bỏ trống',
            'image.required' =>'Ảnh không được bỏ trống',
            'price.required' =>'Giá không được bỏ trống',
        ];
    }
}
