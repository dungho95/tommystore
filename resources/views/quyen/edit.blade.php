@extends('backend.layouts.index')

@section('title')
Cập nhật quyền nhân viên
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
<a href="{{route('danhsachquyen.create')}}">Thêm mới quyền nhân viên</a>

<div class="flash-message">
    @foreach(['danger','warning', 'success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="lose" data-dismiss="alert" aria-lable="lose">&times;</a></p>
        @endif
    @endforeach


    
<h1>CẬP NHẬT QUYỀN NHÂN VIÊN </h1>
<form id="frmCapNhatQuyenNhanVien" method="post" action="{{ route('danhsachquyen.update', ['id'=> $quyen->q_ma]) }}">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field()}}
              
              <div class="box-body">
                <div class="form-group">
                  <label for="q_ten">Tên quyền nhân viên</label>
                  <input type="text" class="form-control" id="q_ten" name="q_ten" value="{{ old('q_ten', $quyen->q_ten)}}"  placeholder=" Tên quyền nhân viên">
                </div>
                </div>
                <div class="form-group">
                  <label for="q_noiDung"> Nội dung quyền được cấp </label>
                  <input type="text" class="form-control" id="q_noiDung" name="q_noiDung" value="{{old('q_noiDung', $quyen->q_noiDung) }}" placeholder=" Nội dung quyền được cấp">
                </div>
                
                
                               
                <div class="form-group">
                  <label for="q_trangThai">Trang Thái</label>
                    <select name='q_trangThai'>
                    <option value="2" {{ old('sp_trangThai', $quyen->q_trangThai) ==2 ? "selected" : ""}} >Khả dụng</option>
                    <option value="1" {{ old('sp_trangThai', $quyen->q_trangThai ) ==1 ? "selected" : ""}}>Khóa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
</form>

                
@endsection
