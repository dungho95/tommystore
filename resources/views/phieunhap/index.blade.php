
@extends('backend.layouts.index')

@section('title')
Danh sách phiếu nhập
@endsection

@section('main-content')
<h2><span style="color:#f94141"><b>DANH SÁCH PHIẾU NHẬP</b></span></h2>
<a href="{{route('danhsachphieunhap.create') }}"> <button type="button" class="btn btn-warning">Thêm mới</button></a>
<div class="flash-message">
    @foreach(['danger','warning', 'success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="lose" data-dismiss="alert" aria-lable="lose">&times;</a></p>
        @endif
    @endforeach
</div>
<div class="box-body">
<table id="example2" class="table table-bordered table-hover">
<thead>
    <tr>
        <th>Mã</th>
        <th>Tên loại sản phẩm</th>
        <th>Mô tả</th>
        <th>Trạng thái</th>
        <td></td>
        <td></td>
    </tr>
    </thead>
     <tbody>
    @foreach($danhsachloai as $loai)
        <tr>
            <td>{{$loai ->lsp_ma}}</td>
            <td>{{$loai ->lsp_ten}}</td>
            <td>{{$loai ->lsp_moTa}}</td>
            <td>{{$loai ->lsp_trangThai == 1 ? "Khóa" : "Khả dụng"}}</td>
            <td><a href="{{route('danhsachloai.edit',['id'=> $loai->lsp_ma]) }}"><button type="button" class="btn btn-warning">Sửa</button></a></td>
            <td>
                <form method="post" action="{{ route('danhsachloai.destroy', ['id' => $loai->lsp_ma]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {{ csrf_field()}}
                <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection