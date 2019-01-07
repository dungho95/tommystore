
@extends('backend.layouts.index')

@section('title')
CẬP NHẬT NHÀ SẢN XUẤT
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
<h2><span style="color:#f94141"><b>CẬP NHẬT NHÀ SẢN XUẤT</b></span></h2>
<form role="form" id="frmCapNhatNhaSanXuat" method="POST" action="{{route('danhsachnhasanxuat.update',['id'=>$nhasanxuat->nsx_ma]) }}" enctype="multipart/form-data  ">
                   <input type="hidden" name="_method" value="PUT" />
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nsx_ten">Tên nhà sản xuất</label>
                            <input type="text" class="form-control" id="nsx_ten" name="nsx_ten" placeholder="Tên loại sản phẩm" value="{{ old('nsx_ten', $nhasanxuat->nsx_ten) }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="nsx_trangThai">Trạng thái</label>
                            <select name="nsx_trangThai" class="form-control select2" data-placeholder="Chọn..."
                                    style="width: 100%;" value="{{ old('nsx_trangThai', $nhasanxuat->nsx_trangThai) }}">
                                    <option value="1" {{ old('nsx_trangThai', $nhasanxuat->nsx_trangThai) == 1 ? "selected" : "" }}>Khoa</option>
                                    <option value="2" {{ old('nsx_trangThai', $nhasanxuat->nsx_trangThai) == 2 ? "selected" : "" }}>Kha dung</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
@endsection