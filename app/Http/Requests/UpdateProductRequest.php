<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required|unique:products,name,'.$this->id,
            'slug' => 'required|unique:products,slug,'.$this->id,
            'sku' => 'required|unique:products,sku,'.$this->id,
        ];
    }
    public function messages()
    {
        return [
            'name.unique' =>'Tên sản phẩm đã tồn tại',
            'name.max' =>'Tên sản phẩm không vượt quá 255 kí tự',
            'slug.unique' =>'Slug đã tồn tại',
            'slug.max' =>'Slug không vượt quá 255 kí tự',
            'sku.unique' =>'Mã sản phẩm đã tồn tại',
            'sku.max' =>'Mã sản phẩm không vượt quá 255 kí tự',
        ];
    }
}
