<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Loai;
use Session;
use App\Http\Requests\LoaiRequest;

class LoaiController extends Controller
{
    public function index()
    {
        $ds_loai= Loai::all(); // SELECT * FROM cusc_loai

        return view('loai.index')
            ->with('danhsachloai',$ds_loai);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("loai.create");

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loai                 = new Loai();
        $loai->lsp_ten        =$request->lsp_ten;
        $loai->lsp_moTa       =$request->lsp_moTa;
        $loai->lsp_trangThai  =$request->lsp_trangThai;
        $loai->save();
        Session::flash('alert-info','Thêm dữ liệu thành công ^^~!!!');
        return redirect() ->route('danhsachloai.index');

    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loai=Loai::where("lsp_ma",$id)->first();
        return view('loai.edit')->with('loai',$loai);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    {

        $loai = Loai::where("lsp_ma",$id)->first();
        $loai->lsp_ten=$request->lsp_ten;
        $loai->lsp_moTa=$request->lsp_moTa;
        $loai->lsp_trangThai=$request->lsp_trangThai;
        $loai->save();

        Session::flash('alert-info','Cập nhật thành công rồi đó ^^~!!!');
        return redirect() ->route('danhsachloai.index');


    }

    public function destroy($id)
    {
        $loai = Loai::where("lsp_ma",$id)->first();
        $loai->delete();

        Session::flash('alert-danger','Xoa du lieu thang cong roi do ahihi!');
        return redirect() ->route('danhsachloai.index');


    }
}
