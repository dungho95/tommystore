<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuyenRequest extends FormRequest
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
            'q_ten' => 'required|max:125',
            'q_noiDung' => 'required',
            'q_trangThai' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'q_ten.required' => 'Tên quyền không được để trống',
            'q_ten.max' => 'Tên loại vượt quá số ký tự cho phép',
            'q_noiDung.required' => 'Nội dung không được để trống',

        ];
    }
}
