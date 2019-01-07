<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nhanvien;
use Session;
use Validator;
use App\Quyen;
use App\Http\Requests\NhanvienRequest;
class NhanvienController extends Controller
{
    public function index()
    {
        $ds_nhanvien= Nhanvien::all(); // SELECT * FROM cusc_loai

        return view('nhanvien.index')
            ->with('danhsachnhanvien',$ds_nhanvien);
    }
    public function create()
    {
        $ds_quyen = Quyen::all();
        return view('nhanvien.create')
            ->with('danhsachquyen', $ds_quyen);
            
    }
    public function store(Request $request)
    {
       
        $nhanvien = new Nhanvien();
        $nhanvien->nv_ten = $request->nv_ten;
        $nhanvien->nv_matKhau = bcrypt($request->nv_matKhau);
        $nhanvien->nv_gioiTinh = $request->nv_gioiTinh;
        $nhanvien->nv_email = $request->nv_email;
        $nhanvien->nv_ngaySinh = $request->nv_ngaySinh;
        $nhanvien->nv_diaChi = $request->nv_diaChi;
        $nhanvien->nv_dienThoai = $request->nv_dienThoai;
        $nhanvien->nv_taoMoi = $request->nv_taoMoi;
        $nhanvien->nv_capNhat = $request->nv_capNhat;
        $nhanvien->nv_trangThai = $request->nv_trangThai;
        $nhanvien->q_ma = $request->q_ma;
        $nhanvien->save();
        Session::flash('alert-success', 'Nhập dữ liệu thành công');
        return redirect()->route('danhsachnhanvien.index');
    }

    public function edit($id)
    {
        $ds_nhanvien = Nhanvien::where("nv_ma", $id)->first();
        $ds_quyen = Quyen::all();
        return view('nhanvien.edit')
        ->with('nhanvien',$ds_nhanvien)
        ->with('danhsachquyen',$ds_quyen);
        
    }
    public function update(NhanvienRequest $request, $id)
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
        $nhanvien = Nhanvien::where("nv_ma", $id)->first();
        $nhanvien->nv_ten = $request->nv_ten;
        $nhanvien->nv_matKhau = $request->nv_matKhau;
        $nhanvien->nv_gioiTinh = $request->nv_gioiTinh;
        $nhanvien->nv_email = $request->nv_email;
        $nhanvien->nv_ngaySinh = $request->nv_ngaySinh;
        $nhanvien->nv_diaChi = $request->nv_diaChi;
        $nhanvien->nv_dienThoai = $request->nv_dienThoai;
        $nhanvien->nv_taoMoi = $request->nv_taoMoi;
        $nhanvien->nv_capNhat = $request->nv_capNhat;
        $nhanvien->nv_trangThai = $request->nv_trangThai;
        $nhanvien->q_ma = $request->q_ma;
        $nhanvien->save();
        
        Session::flash('alert-success', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachnhanvien.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $nhanvien = Nhanvien::where("nv_ma", $id)->first();
      $nhanvien->delete();
      Session::flash('alert-danger', 'Xóa dữ liệu thành công');
      return redirect()->route('danhsachnhanvien.index');
    }
}
