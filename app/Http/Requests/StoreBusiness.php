<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusiness extends FormRequest
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
            'name'=>'required|max:50',
            'bank_information'=>'required|max:20',
            'phone'=>'required|max:20',
            'email'=>'required',
            'website'=>'required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Tên đối tác không thể thiếu',
            'name.max'=>'Tên đối tác không được vượt quá 50 ký tự',
            'phone.required'=>'Số điện thoại không thể thiếu',
            'phone.max'=>'Số điện thoại không vượt quá 20 ký tự',
            'email.required'=>'Email không thể thiếu',
            'website.required'=>'Website không thể thiếu',
            'bank_information.required'=>'Ngân hàng không thể thiếu',


        ];
    }
}
