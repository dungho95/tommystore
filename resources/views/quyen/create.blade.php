@extends('backend.layouts.index')
@section('title')
Thêm mới quyền nhân viên
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
<h1>THÊM MỚI QUYỀN NHÂN VIÊN</h1>
<form id="frmThemMoiQuyenNhanVien" method="post" action="{{ route('danhsachquyen.store')}}" enctype="multipart/form-data">
  {{ csrf_field() }}
              
              <div class="box-body">
                <div class="form-group">
                  <label for="q_ten">Tên quyền của nhân viên</label>
                  <input type="text" class="form-control" id="q_ten" name="q_ten" placeholder=" Tên quyền của nhân viên">
                </div>
                </div>
                <div class="form-group">
                  <label for="q_noiDung">Nội dung của quyền được cấp</label>
                  <input type="text" class="form-control" id="q_noiDung" name="q_noiDung" placeholder=" Nội dung của quyền được cấp">
                </div>
                
                
                                
                <div class="form-group">
                  <label for="q_trangThai">Trang Thái</label>
                    <select name='q_trangThai'>
                    <option value="2">Khả dụng</option>
                    <option value="1">Khóa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
</form>

                
@endsection
