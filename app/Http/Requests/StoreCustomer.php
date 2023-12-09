<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomer extends FormRequest
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
            'fullname'=>'required|max:50',
            'sex'=>'required|',
            'address'=>'required',
            'phone'=>'required|max:20',
            'email'=>'required',
        ];
    }
    public function messages(){
        return [
            'fullname.required'=>'Tên đối tác không thể thiếu',
            'fullname.max'=>'Tên đối tác không được vượt quá 50 ký tự',
            'phone.required'=>'Số điện thoại không thể thiếu',
            'phone.max'=>'Số điện thoại không vượt quá 20 ký tự',
            'email.required'=>'Email không thể thiếu',
            'adress.required'=>'Địa chỉ không thể thiếu',
            'sex.required'=>'Giới tính không thể thiếu',


        ];
    }
}
