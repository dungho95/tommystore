@extends('backend.layouts.index')

@section('title')
Cập nhật thông tin nhân viên
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
<a href="{{route('danhsachnhanvien.create')}}">Thêm mới thông tin nhân viên</a>

<div class="flash-message">
    @foreach(['danger','warning', 'success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="lose" data-dismiss="alert" aria-lable="lose">&times;</a></p>
        @endif
    @endforeach


    
<h1>CẬP NHẬT THÔNG TIN NHÂN VIÊN </h1>
<form id="frmCapNhatThongTinNhanVien" method="post" action="{{ route('danhsachnhanvien.update', ['id'=> $nhanvien->nv_ma]) }}">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field()}}
              
              <div class="box-body">
       

                <div class="form-group">
                  <label for="nv_ten">Tên nhân viên</label>
                  <input type="text" class="form-control" id="nv_ten" name="nv_ten" value="{{ old('nv_ten', $nhanvien->nv_ten)}}" placeholder=" Tên nhân viên">
                </div>
               
                <div class="form-group">
                  <label for="nv_matKhau">Mật khẩu</label>
                  <input type="password" class="form-control" id="nv_matKhau" name="nv_matKhau" placeholder=" Mật khẩu">
                </div>
               
                <div class="form-group">
                  <label for="nv_gioiTinh">Giới tính</label>
                  <select name='nv_gioiTinh'>
                    <option value="1" {{ old('nv_gioiTinh', $nhanvien->nv_gioiTinh) ==1 ? "selected" : ""}} >Nam</option>
                    <option value="0" {{ old('nv_gioiTinh', $nhanvien->nv_gioiTinh) ==0 ? "selected" : ""}}>Nữ</option>
                    </select>
                </div>
                
                <div class="form-group">
                  <label for="nv_email">Email</label>
                  <input type="email" class="form-control" id="nv_email" name="nv_email" value="{{ old('nv_email', $nhanvien->nv_email)}}" placeholder=" Email">
                </div>
                
                <div class="form-group">
                  <label for="nv_ngaySinh">Ngày sinh</label>
                  <input type="text" class="form-control" id="nv_ngaySinh" name="nv_ngaySinh" value="{{ old('nv_ngaySinh', $nhanvien->nv_ngaySinh)}}" placeholder=" Ngày sinh">
                </div>
                
                
                <div class="form-group">
                  <label for="nv_diaChi">Địa chỉ</label>
                  <input type="text" class="form-control" id="nv_diaChi" name="nv_diaChi" value="{{ old('nv_diaChi', $nhanvien->nv_diaChi)}}" placeholder=" Địa chỉ">
                </div>
                
                <div class="form-group">
                  <label for="nv_dienThoai"> Điện thoại </label>
                  <input type="text" class="form-control" id="nv_dienThoai" name="nv_dienThoai" value="{{ old('nv_dienThoai', $nhanvien->nv_dienThoai)}}" placeholder=" Điện thoại">
                </div>
                
                <div class="form-group">
                  <label for="nv_taoMoi">Ngày khởi tạo</label>
                  <input type="text" class="form-control" id="nv_taoMoi" name="nv_taoMoi" value="{{ old('nv_taoMoi', $nhanvien->nv_taoMoi)}}" placeholder=" Ngày khởi tạo">
                </div>
                
                <div class="form-group">
                  <label for="nv_capNhat">Ngày cập nhật</label>
                  <input type="text" class="form-control" id="nv_capNhat" name="nv_capNhat" value="{{ old('nv_capNhat', $nhanvien->nv_capNhat)}}" placeholder=" Ngày cập nhật">
                </div>
                
                
                               
                <div class="form-group">
                  <label for="nv_trangThai">Trang Thái</label>
                    <select name='nv_trangThai'>
                    <option value="2" {{ old('nv_trangThai', $nhanvien->nv_trangThai) ==2 ? "selected" : ""}} >Khả dụng</option>
                    <option value="1" {{ old('nv_trangThai', $nhanvien->nv_trangThai ) ==1 ? "selected" : ""}}>Khóa</option>
                    </select>
                </div>

                <div class="form-group">
                <label for="q_ma">Quyền nhân viên</label>
                <select name="q_ma">
                    @foreach($danhsachquyen as $quyen)
                        @if(old('q_ma') == $quyen->q_ma)
                        <option value="{{ $quyen->q_ma }}" selected>{{ $quyen->q_ten }}</option>
                        @else
                        <option value="{{ $quyen->q_ma }}">{{ $quyen->q_ten }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
</form>

                
@endsection
