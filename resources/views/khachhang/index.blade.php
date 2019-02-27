
@extends('backend.layouts.index')

@section('title')
Danh sách khách hàng
@endsection

@section('main-content')
<h2><span style="color:#f94141"><b>DANH SÁCH KHÁCH HÀNG</b></span></h2>

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
        <th>Tên khách hàng</th>
        <th>Tài khoản</th>
        <th>Email</th>
        <th>Trạng thái</th>
        <td></td>
        <td></td>
    </tr>
    </thead>
     <tbody>
    @foreach($ds_kh as $khachhang)
        <tr>
            <td>{{$khachhang ->kh_ma}}</td>
            <td>{{$khachhang ->kh_hoTen}}</td>
            <td>{{$khachhang ->kh_taiKhoan}}</td>
            <td>{{$khachhang ->kh_email}}</td>
            <td>{{$khachhang ->kh_trangThai == 1 ? "Khóa" : "Khả dụng"}}</td>
            <td><a href="{{route('danhsachkhachhang.edit',['id'=> $khachhang->kh_ma]) }}"><button type="button" class="btn btn-warning">Sửa</button></a></td>
            <td>
                <form method="post" action="{{ route('danhsachkhachhang.destroy', ['id' => $khachhang->kh_ma]) }}">
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