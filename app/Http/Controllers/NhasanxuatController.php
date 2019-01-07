<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nhasanxuat;
use Session;
use Validator;
use App\Http\Requests\NhasanxuatRequest;
class NhasanxuatController extends Controller
{
    public function index()
    {
        $ds_nsx= Nhasanxuat::all(); // SELECT * FROM cusc_loai

        return view('nhasanxuat.index')
            ->with('danhsachnhasanxuat',$ds_nsx);
    }
    public function create()
    {
        return view('nhasanxuat.create');
    }
    public function store(Request $request)
    {
       
        $nhasanxuat = new Nhasanxuat();
        $nhasanxuat->nsx_ten = $request->nsx_ten;
        $nhasanxuat->nsx_trangThai = $request->nsx_trangThai;
        $nhasanxuat->save();
        Session::flash('alert-success', 'Nhập dữ liệu thành công');
        return redirect()->route('danhsachnhasanxuat.index');
    }

    public function edit($id)
    {
        $nhasanxuat = Nhasanxuat::where("nsx_ma", $id)->first();
        return view('nhasanxuat.edit')->with('nhasanxuat',$nhasanxuat);
        
    }
    public function update(NhasanxuatRequest $request, $id)
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
        $nhasanxuat = Nhasanxuat::where("nsx_ma", $id)->first();
        $nhasanxuat->nsx_ten = $request->nsx_ten;
        
        $nhasanxuat->nsx_trangThai = $request->nsx_trangThai;
        $nhasanxuat->save();
        
        Session::flash('alert-success', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachnhasanxuat.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $nhasanxuat = Nhasanxuat::where("nsx_ma", $id)->first();
      $nhasanxuat->delete();
      Session::flash('alert-danger', 'Xóa dữ liệu thành công');
      return redirect()->route('danhsachnhasanxuat.index');
    }
}
