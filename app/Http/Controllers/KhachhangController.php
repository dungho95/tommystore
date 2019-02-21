<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khachhang;
use Session;

class KhachhangController extends Controller
{
    public function index()
    {
        $ds_kh= Khachhang::all(); // SELECT * FROM cusc_loai

        return view('khachhang.index')
            ->with('ds_kh',$ds_kh);
    }
    public function store(Request $request)
    {
       
        $khachhang = new khachhang();
        $khachhang->kh_taiKhoan = $request->kh_taiKhoan;
        $khachhang->kh_matKhau = bcrypt($request->kh_matKhau);
        $khachhang->kh_hoTen   = $request->kh_hoTen;
        $khachhang->kh_gioiTinh = $request->kh_gioiTinh;
        $khachhang->kh_email = $request->kh_email;
        $khachhang->kh_ngaySinh = $request->kh_ngaySinh;
        $khachhang->kh_diaChi = $request->kh_diaChi;
        $khachhang->kh_dienThoai = $request->kh_dienThoai;
        $khachhang->kh_makichhoat = $request->kh_makichhoat;
        $khachhang->kh_trangThai = $request->kh_trangThai;
        $khachhang->save();
        Session::flash('alert-success', 'Nhập dữ liệu thành công');
        return redirect()->route('danhsachkhachhang.index');
    }
    public function edit($id)
    {
        $ds_khachhang = khachhang::where("kh_ma", $id)->first();
        return view('khachhang.edit')
        ->with('ds_khachhang',$ds_khachhang);
        
    }
    public function update(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'l_ten' => 'required|unique:posts|max:60',
        //     'l_taoMoi' => 'required',
        //     'l_capNhat' => 'required',
        //     'l_trangThai' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect(route('danhsachloai.edit', ['id' => $id]))
        //                 ->withErrors($validator)
        //                 ->withInput();
        //}
        $khachhang = khachhang::where("kh_ma", $id)->first();
        $khachhang->kh_taiKhoan = $request->kh_taiKhoan;
        $khachhang->kh_matKhau = $request->kh_matKhau;
        $khachhang->kh_hoTen   = $request->kh_hoTen;
        $khachhang->kh_gioiTinh = $request->kh_gioiTinh;
        $khachhang->kh_email = $request->kh_email;
        $khachhang->kh_ngaySinh = $request->kh_ngaySinh;
        $khachhang->kh_diaChi = $request->kh_diaChi;
        $khachhang->kh_dienThoai = $request->kh_dienThoai;
        $khachhang->kh_makichhoat = $request->kh_makichhoat;
        $khachhang->kh_trangThai = $request->kh_trangThai;
        $khachhang->save();
        
        Session::flash('alert-success', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachkhachhang.index');
    }
}
