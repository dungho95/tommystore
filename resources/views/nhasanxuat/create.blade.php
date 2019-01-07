
@extends('backend.layouts.index')

@section('title')
Thêm mới nhà sản xuất
@endsection

@section('main-content')
<h2><span style="color:#f94141"><b>THÊM NHÀ SẢN XUẤT</b></span></h2>
<form role="form" id="frmThemLoaiSanPham" method="POST" action="{{route('danhsachnhasanxuat.store')}}" enctype="multipart/form-data  ">
                   <input type="hidden" name="_method" value="POST" />
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nsx_ten">Tên nhà sản xuất</label>
                            <input type="text" class="form-control" id="nsx_ten" name="nsx_ten" placeholder="Tên nhà sản xuất">
                        </div>
                        
                        <div class="form-group">
                            <label for="nsx_trangThai">Trạng thái</label>
                            <select name="nsx_trangThai" class="form-control select2" data-placeholder="Chọn..."
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