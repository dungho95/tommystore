
@extends('backend.layouts.index')

@section('title')
Thêm mới loại sản phẩm
@endsection

@section('main-content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<a href="{{route('danhsachkhachhang.index') }}"> <button type="button" class="btn btn-default"><img src="{{asset('theme/AdminLTE/img/left-arrow.png')}}" /></button></a>
<form role="form" id="frmThemLoaiSanPham" method="POST" action="{{route('danhsachkhachhang.update',['id'=>$ds_khachhang->kh_ma]) }}" enctype="multipart/form-data  ">
                   <input type="hidden" name="_method" value="PUT" />
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="kh_taiKhoan">Tài khoản</label>
                            <input type="text" class="form-control" id="kh_taiKhoan" name="kh_taiKhoan" value="{{ old('kh_taiKhoan', $ds_khachhang->kh_taiKhoan)}}" placeholder=" Tên nhân viên">
                        </div>
                    
                        <div class="form-group">
                            <label for="kh_matKhau">Mật khẩu</label>
                            <input type="password" class="form-control" id="kh_matKhau" name="kh_matKhau" value="{{ old('kh_matKhau', $ds_khachhang->kh_matKhau)}}" placeholder=" Mật khẩu">
                        </div>

                        <div class="form-group">
                            <label for="kh_hoTen">Họ tên</label>
                            <input type="text" class="form-control" id="kh_hoTen" name="kh_hoTen" value="{{ old('kh_hoTen', $ds_khachhang->kh_hoTen)}}"  placeholder=" Họ tên">
                        </div>
                    
                        <div class="form-group">
                            <label for="kh_gioiTinh">Giới tính</label>
                            <select name='kh_gioiTinh'>
                                <option value="1" {{ old('kh_gioiTinh', $ds_khachhang->kh_gioiTinh) ==1 ? "selected" : ""}} >Nam</option>
                                <option value="0" {{ old('kh_gioiTinh', $ds_khachhang->kh_gioiTinh) ==0 ? "selected" : ""}}>Nữ</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="kh_email">Email</label>
                            <input type="email" class="form-control" id="kh_email" name="kh_email" value="{{ old('kh_email', $ds_khachhang->kh_email)}}" placeholder=" Email">
                        </div>
                        
                        <div class="form-group">
                            <label for="kh_ngaySinh">Ngày sinh</label>
                            <input type="text" class="form-control" id="kh_ngaySinh" name="kh_ngaySinh" value="{{ old('kh_ngaySinh', $ds_khachhang->kh_ngaySinh)}}" placeholder=" Ngày sinh">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="kh_diaChi">Địa chỉ</label>
                            <input type="text" class="form-control" id="kh_diaChi" name="kh_diaChi" value="{{ old('kh_diaChi', $ds_khachhang->kh_diaChi)}}" placeholder=" Địa chỉ">
                        </div>
                        
                        <div class="form-group">
                            <label for="kh_dienThoai"> Điện thoại </label>
                            <input type="text" class="form-control" id="kh_dienThoai" name="kh_dienThoai" value="{{ old('kh_dienThoai', $ds_khachhang->kh_dienThoai)}}" placeholder=" Điện thoại">
                        </div>
                        
                        <div class="form-group">
                            <label for="kh_makichhoat">Mã kích hoạt</label>
                            <input type="text" class="form-control" id="kh_makichhoat" name="kh_makichhoat" value="{{ old('kh_makichhoat', $ds_khachhang->kh_makichhoat)}}" placeholder=" Ngày khởi tạo">
                        </div>

                        <div class="form-group">
                        <label for="kh_trangThai">Trang Thái</label>
                            <select name='kh_trangThai'>
                                <option value="2" {{ old('kh_trangThai', $ds_khachhang->kh_trangThai) ==2 ? "selected" : ""}} >Khả dụng</option>
                                <option value="1" {{ old('kh_trangThai', $ds_khachhang->kh_trangThai ) ==1 ? "selected" : ""}}>Khóa</option>
                            </select>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

                
@endsection