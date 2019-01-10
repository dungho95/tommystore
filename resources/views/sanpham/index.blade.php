
@extends('backend.layouts.index')

@section('title')
Danh sách sản phẩm
@endsection

@section('main-content')
<h2><span style="color:#f94141"><b>DANH SÁCH SẢN PHẨM</b></span></h2>
<a href="{{ route('danhsachsanpham.create') }}"> <button type="button" class="btn btn-warning">Thêm mới</button></a>
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
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Loại sản phẩm</th>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    </thead>
     <tbody>
    @foreach($ds_sp as $sp)
        <tr>
                <td>{{ $sp->sp_ma }}</td>
                <td>{{ $sp->sp_ten }}</td>
                <td><img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" class="img-list" /></td>
                <td>{{ $sp->loaiSp->lsp_ten }}</td>
                <td>
                    <a href="{{ route('danhsachsanpham.edit', ['id' => $sp->sp_ma]) }}" class="btn btn-primary pull-left">Sửa</a>
                </td>
                <td>
                    <form method="post" action="{{ route('danhsachsanpham.destroy', ['id' => $sp->sp_ma]) }}" class="pull-left">
                        <input type="hidden" name="_method" value="DELETE" />
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Xoa</button>
                    </form>
                </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection