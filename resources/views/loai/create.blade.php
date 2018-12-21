
@extends('backend.layouts.index')

@section('title')
Thêm mới loại sản phẩm
@endsection

@section('main-content')
<h2><span style="color:#f94141"><b>THÊM LOẠI SẢN PHẨM</b></span></h2>
<form role="form" id="frmThemLoaiSanPham" method="POST" action="{{route('danhsachloai.store')}}" enctype="multipart/form-data  ">
                   <input type="hidden" name="_method" value="POST" />
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="lsp_ten">Tên loại sản phẩm</label>
                            <input type="text" class="form-control" id="lsp_ten" name="lsp_ten" placeholder="Tên loại sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="lsp_moTa">Mô tả</label>
                            <input type="text" class="form-control" id="lsp_moTa" name="lsp_moTa" placeholder="Mô tả">
                            <!-- /.input group -->
                          </div>
                        <div class="form-group">
                            <label for="lsp_trangThai">Trạng thái</label>
                            <select name="lsp_trangThai" class="form-control select2" data-placeholder="Chọn..."
                                    style="width: 100%;">
                              <option value="1">Khóa</option>
                              <option value="2">Khả dụng</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
@endsection