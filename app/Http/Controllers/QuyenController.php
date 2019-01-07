<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quyen;
use Session;
use Validator;
use App\Http\Requests\QuyenRequest;
class QuyenController extends Controller
{
    public function index()
    {
        $ds_quyen= Quyen::all(); // SELECT * FROM cusc_loai

        return view('quyen.index')
            ->with('danhsachquyen',$ds_quyen);
    }
    public function create()
    {
        return view('quyen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $quyen = new Quyen();
        $quyen->q_ten = $request->q_ten;
        $quyen->q_noiDung = $request->q_noiDung;
        $quyen->q_trangThai = $request->q_trangThai;
        $quyen->save();
        Session::flash('alert-success', 'Nhập dữ liệu thành công');
        return redirect()->route('danhsachquyen.index');
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quyen = Quyen::where("q_ma", $id)->first();
        return view('quyen.edit')->with('quyen',$quyen);
        
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuyenRequest $request, $id)
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
        $quyen = Quyen::where("q_ma", $id)->first();
        $quyen->q_ten = $request->q_ten;
        $quyen->q_noiDung = $request->q_noiDung;
        $quyen->q_trangThai = $request->q_trangThai;
        $quyen->save();
        
        Session::flash('alert-success', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachquyen.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $quyen = Quyen::where("q_ma", $id)->first();
      $quyen->delete();
      Session::flash('alert-danger', 'Xóa dữ liệu thành công');
      return redirect()->route('danhsachquyen.index');
    }
}
