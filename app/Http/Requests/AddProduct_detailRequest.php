<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Product;


class AddProduct_detailRequest extends FormRequest
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
            'sku' => 'unique:product_details|max:100',
            'id_size' => 'required',
            'id_color' => 'required',
            'quantity' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'sku.unique'=>'Không được trùng tên sản phẩm',
            'sku.max'=>'Không được quá 100 ký tự',
            'quantity.required'=>'Số lượng không được để trống',

        ];
    }
}
