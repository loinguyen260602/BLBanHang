<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //rutrun false sang return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:100',
            'price'=>'required|numeric',
            'old_price'=>'required|numeric',
        ];
    }
    // function messages ghi đè lên rules();
    public function messages(){
        return [
            'name.required'=>'Tên sản phẩm không thể thiếu',
            'name.max'=>'Tên sản phẩm không dài quá 100 ký tự',
            'price.required'=>'Giá sản phẩm không thể thiếu',
            'price.numeric'=>'Giá sản phẩm phải là kiểu số',
            'old_price.required'=>'Giá sản phẩm cũ không thể thiếu',
            'old_price.numeric'=>'Giá cũ của sản phẩm phải là kiểu số',
        ];
    }
}
