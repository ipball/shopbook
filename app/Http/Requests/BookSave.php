<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookSave extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'tel' => 'required|numeric|digits_between:8,15',
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'โปรดระบุชื่อจริง',
            'lastname.required' => 'โปรดระบุนามสกุล',
            'username.required' => 'โปรดระบุชื่อผู้ใช้',
            'email.required' => 'โปรดระบุอีเมล์',
            'email.email' => 'รูปแบบอีเมล์ไม่ถูกต้อง',
            'tel.required' => 'โปรดระบุเบอร์โทร',
            'tel.numeric' => 'ระบุเฉพาะตัวเลขเท่านั้น',
            'tel.digits_between' => 'เบอร์โทรต้องมี 8 - 15 ตัว',
        ];
    }
}
