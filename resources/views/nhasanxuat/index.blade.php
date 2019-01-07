
@extends('backend.layouts.index')

@section('title')
DANH SÁCH NHÀ SẢN XUẤT
@endsection

@section('main-content')
<h2><span style="color:#f94141"><b>DANH SÁCH NHÀ SẢN XUẤT</b></span></h2>
<a href="{{route('danhsachnhasanxuat.create') }}"> <button type="button" class="btn btn-warning">Thêm mới</button></a>
<div class="flash-message">
    @foreach(['danger','warning', 'success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="lose" data-dismiss="alert" aria-lable="lose">&times;</a></p>
        @endif
    @endforeach
</div>
<div class="box-body">
<table id="example2" class="table table-bordered table-hover">
<thead>
    <tr>
        <th>Mã</th>
        <th>Tên nhà sản xuất</th>
        <th>Trạng thái</th>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    </thead>
     <tbody>
    @foreach($danhsachnhasanxuat as $nhasanxuat)
        <tr>
            <td>{{$nhasanxuat ->nsx_ma}}</td>
            <td>{{$nhasanxuat ->nsx_ten}}</td>
            <td>{{$nhasanxuat ->nsx_trangThai == 1 ? "Khóa" : "Khả dụng"}}</td>
            <td><a href="{{route('danhsachnhasanxuat.edit',['id'=> $nhasanxuat->nsx_ma]) }}">Sửa</a></td>
            <td>
                <form method="post" action="{{ route('danhsachnhasanxuat.destroy', ['id' => $nhasanxuat->nsx_ma]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {{ csrf_field()}}
                <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection