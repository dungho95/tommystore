
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
<h2><span style="color:#f94141"><b>THÊM LOẠI SẢN PHẨM</b></span></h2>
<form role="form" id="frmThemLoaiSanPham" method="POST" action="{{route('danhsachloai.update',['id'=>$loai->lsp_ma]) }}" enctype="multipart/form-data  ">
                   <input type="hidden" name="_method" value="PUT" />
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="lsp_ten">Tên loại sản phẩm</label>
                            <input type="text" class="form-control" id="lsp_ten" name="lsp_ten" placeholder="Tên loại sản phẩm" value="{{ old('lsp_ten', $loai->lsp_ten) }}">
                        </div>
                        <div class="form-group">
                            <label for="lsp_moTa">Mô tả</label>
                            <input type="text" class="form-control" id="lsp_moTa" name="lsp_moTa" placeholder="Mô tả" value="{{ old('lsp_moTa', $loai->lsp_moTa) }}">
                            <!-- /.input group -->
                          </div>
                        <div class="form-group">
                            <label for="lsp_trangThai">Trạng thái</label>
                            <select name="lsp_trangThai" class="form-control select2" data-placeholder="Chọn..."
                                    style="width: 100%;" value="{{ old('lsp_trangThai', $loai->lsp_trangThai) }}">
                                    <option value="1" {{ old('lsp_trangThai', $loai->lsp_trangThai) == 1 ? "selected" : "" }}>Khoa</option>
                                    <option value="2" {{ old('lsp_trangThai', $loai->lsp_trangThai) == 2 ? "selected" : "" }}>Kha dung</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
@endsection