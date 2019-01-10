<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hinhthucthanhtoan;
use Session;
use Validator;

class HinhthucthanhtoanController extends Controller
{
    public function index()
    {
        $ds_httt= Hinhthucthanhtoan::all(); // SELECT * FROM cusc_loai

        return view('hinhthucthanhtoan.index')
            ->with('hinhthucthanhtoan',$ds_httt);
    }
    public function create()
    {
        return view('hinhthucthanhtoan.create');
    }
    public function store(Request $request)
    {
       
        $httt = new Hinhthucthanhtoan();
        $httt->httt_ten = $request->httt_ten;
        $httt->httt_trangThai = $request->httt_trangThai;
        $httt->save();
        Session::flash('alert-success', 'Nhập dữ liệu thành công');
        return redirect()->route('hinhthucthanhtoan.index');
    }

    public function edit($id)
    {
        $httt = Hinhthucthanhtoan::where("httt_ma", $id)->first();
        return view('hinhthucthanhtoan.edit')->with('hinhthucthanhtoan',$httt);
        
    }
    public function update(HinhthucthanhtoanRequest $request, $id)
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
        $httt = Hinhthucthanhtoan::where("httt_ma", $id)->first();
        $httt->httt_ten = $request->httt_ten;
        
        $httt->httt_trangThai = $request->httt_trangThai;
        $httt->save();
        
        Session::flash('alert-success', 'Cập nhật dữ liệu thành công');
        return redirect()->route('hinhthucthanhtoan.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $httt = Hinhthucthanhtoan::where("httt_ma", $id)->first();
      $httt->delete();
      Session::flash('alert-danger', 'Xóa dữ liệu thành công');
      return redirect()->route('hinhthucthanhtoan.index');
    }
}
