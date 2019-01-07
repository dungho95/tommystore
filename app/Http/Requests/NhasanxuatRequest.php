<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhasanxuatRequest extends FormRequest
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
            'nsx_ten' => 'required|max:125',
            'nsx_trangThai' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nsx_ten.required' => 'Tên nhà sản xuất không được để trống',
            'nsx_ten.max' => 'Tên nhà sản xuất vượt quá số ký tự cho phép',
            

        ];
    }
}
