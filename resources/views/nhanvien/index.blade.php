
@extends('backend.layouts.index')

@section('title')
NHÂN VIÊN
@endsection

@section('main-content')
<a href="{{route('danhsachnhanvien.create')}}">Thêm mới nhân viên</a>

<a href="#" class="btn btn-primary">Xuất Excel</a>

<table class="table table-bordered">
<h1><span style="color:red;"> NHÂN VIÊN</span></h1>
<div class="flash-message">
    @foreach(['danger','warning', 'success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="lose" data-dismiss="alert" aria-lable="lose">&times;</a></p>
        @endif
    @endforeach

</div>

<table  class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
<thead>
    <tr>
        <th>Mã nhân viên</th>
        <th>Tên nhân viên</th>
        <th>Mật khẩu</th>
        <th>Giới tính</th>
        <th>Email</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
        <th>Ngày tạo mới</th>
        <th>Ngày cập nhật</th>
        <th>Trạng thái</th>
        <th>Quyền</th>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    </thead>
     <tbody>
    @foreach($danhsachnhanvien as $nhanvien)
        <tr>
            <td>{{$nhanvien ->nv_ma}}</td>
            <td>{{$nhanvien ->nv_ten}}</td>
            <td>{{$nhanvien ->nv_matKhau}}</td>
            <td>{{$nhanvien ->nv_gioiTinh}}</td>
            <td>{{$nhanvien ->nv_email}}</td>
            <td>{{$nhanvien ->nv_ngaySinh}}</td>
            <td>{{$nhanvien ->nv_diaChi}}</td>
            <td>{{$nhanvien ->nv_dienThoai}}</td>
            <td>{{$nhanvien ->nv_taoMoi}}</td>
            <td>{{$nhanvien ->nv_capNhat}}</td>
            <td>{{$nhanvien ->nv_trangThai == 1 ? "Khóa" : "Khả dụng"}}</td>
            <td>{{$nhanvien ->quyenNV->q_ma}}</td>
            <td><a href="{{ route('danhsachnhanvien.edit',['id'=> $nhanvien->nv_ma]) }}"> Sửa</a></td>
            <td>
                <form method="post" action="{{ route('danhsachnhanvien.destroy',['id'=> $nhanvien->nv_ma]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {{ csrf_field()}}
                <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection