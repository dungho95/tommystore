<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiRequest extends FormRequest
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
            'lsp_ten'=> 'required|unique:loai|max:60',
            'lsp_moTa' => 'required',
            'lsp_trangThai'=>'required',
         ];

    }
    
    public function messages(){
        return[
            'lsp_ten.required'=>'Tên loại bắt buộc nhập',
            'lsp_ten.unique'=>'Tên loại đã có trong hệ thống. Vui lòng kiểm tra lại',
            'lsp_ten.max'=> 'Tên loại đã vượt quá số lượng cho phép',
            'lsp_moTa.required'=>'Mô tả không được phép rỗng'
        ];
    }
}
