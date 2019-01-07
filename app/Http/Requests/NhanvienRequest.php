<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhanvienRequest extends FormRequest
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
            'nv_ten' => 'required|max:125',
            'nv_trangThai' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nv_ten.required' => 'Tên nhân viên không được để trống',
            'nv_ten.max' => 'Tên nhân viên vượt quá số ký tự cho phép',
            

        ];
    }
}
