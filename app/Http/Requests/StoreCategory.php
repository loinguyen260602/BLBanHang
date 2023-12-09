<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:100',
            'parent_id'=>'required|Integer',
            'feature'=>'required|Integer',
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Tên sản phẩm không thể thiếu',
            'name.max'=>'Tên sản phẩm không dài quá 100 ký tự',
            'parent_id.required'=>'Nhà sản xuất phẩm không thể thiếu',
            'parent_id.integer'=>'Nhà sản xuất phải là số',
            'feature.required'=>'Tính không thể thiếu',
            'feature.Integer'=>'Tính năng phải là số',
        ];
    }

}
