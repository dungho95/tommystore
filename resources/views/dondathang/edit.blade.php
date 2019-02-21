
@extends('backend.layouts.index')

@section('title')
Xác nhận đơn đặt hàng
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
<a href="{{route('danhsachdondathang.index') }}"> <button type="button" class="btn btn-default"><img src="{{asset('theme/AdminLTE/img/left-arrow.png')}}" /></button></a>
<h2><span style="color:#f94141"><b>Xác nhận đơn đặt hàng</b></span></h2>
<form role="form" id="frmThemLoaiSanPham" method="POST" action="{{route('danhsachdondathang.update',['id'=>$loai->dh_ma]) }}" enctype="multipart/form-data  ">
                   <input type="hidden" name="_method" value="PUT" />
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="dh_ten">Tên loại sản phẩm</label>
                            <input type="text" class="form-control" id="dh_ten" name="dh_ten" placeholder="Tên loại sản phẩm" value="{{ old('dh_ten', $loai->dh_ten) }}">
                        </div>
                        <div class="form-group">
                            <label for="dh_moTa">Mô tả</label>
                            <input type="text" class="form-control" id="dh_moTa" name="dh_moTa" placeholder="Mô tả" value="{{ old('dh_moTa', $loai->dh_moTa) }}">
                            <!-- /.input group -->
                          </div>
                        <div class="form-group">
                            <label for="dh_trangThai">Trạng thái</label>
                            <select name="dh_trangThai" class="form-control select2" data-placeholder="Chọn..."
                                    style="width: 100%;" value="{{ old('dh_trangThai', $loai->dh_trangThai) }}">
                                    <option value="1" {{ old('dh_trangThai', $loai->dh_trangThai) == 1 ? "selected" : "" }}>Khoa</option>
                                    <option value="2" {{ old('dh_trangThai', $loai->dh_trangThai) == 2 ? "selected" : "" }}>Kha dung</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
@endsection