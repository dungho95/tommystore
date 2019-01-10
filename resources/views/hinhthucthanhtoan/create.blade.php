
@extends('backend.layouts.index')

@section('title')
Thêm mới hình thức thanh toán
@endsection

@section('main-content')
<h2><span style="color:#f94141"><b>THÊM MỚI HÌNH THỨC THANH TOÁN</b></span></h2>
<form role="form" id="frmHinhThucThanhToan" method="POST" action="{{route('hinhthucthanhtoan.store')}}" enctype="multipart/form-data  ">
                   <input type="hidden" name="_method" value="POST" />
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="httt_ten">Tên hình thức thanh toán</label>
                            <input type="text" class="form-control" id="httt_ten" name="httt_ten" placeholder="Hình thức thanh toán">
                        </div>
                        
                        <div class="form-group">
                            <label for="httt_trangThai">Trạng thái</label>
                            <select name="httt_trangThai" class="form-control select2" data-placeholder="Chọn..."
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