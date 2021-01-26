<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCategoryRequest extends FormRequest
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
            'name' => 'unique:categories,name,'.$this->id,
            'slug' => 'unique:categories,slug,'.$this->id
        ];
    }
    public function messages()
    {
        return [
            'name.unique' =>'Tên danh mục đã tồn tại',
            'name.max' =>'Tên danh mục không vượt quá 100 kí tự',
            'slug.unique' =>'slug đã tồn tại',
            'slug.max' =>'slug không vượt quá 100 kí tự'
        ];
    }
}
