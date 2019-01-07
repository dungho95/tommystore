
@extends('backend.layouts.index')

@section('title')
Quyền nhân viên
@endsection

@section('main-content')
<a href="{{route('danhsachquyen.create')}}">Thêm mới quyền</a>

<a href="#" class="btn btn-primary">Xuất Excel</a>

<table class="table table-bordered">
<h1><span style="color:red;"> Quyền của nhân viên</span></h1>
<div class="flash-message">
    @foreach(['danger','warning', 'success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="lose" data-dismiss="alert" aria-lable="lose">&times;</a></p>
        @endif
    @endforeach

</div>

<table  class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
<thead>
    <tr>
        <th>Mã quyền</th>
        <th>Tên quyền</th>
        <th>Nội dung</th>
        <th>Trạng thái</th>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    </thead>
     <tbody>
    @foreach($danhsachquyen as $quyen)
        <tr>
            <td>{{$quyen ->q_ma}}</td>
            <td>{{$quyen ->q_ten}}</td>
            <td>{{$quyen ->q_noiDung}}</td>
            <td>{{$quyen ->q_trangThai == 1 ? "Khóa" : "Khả dụng"}}</td>
            <td><a href="{{ route('danhsachquyen.edit',['id'=> $quyen->q_ma]) }}"> Sửa</a></td>
            <td>
                <form method="post" action="{{ route('danhsachquyen.destroy',['id'=> $quyen->q_ma]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {{ csrf_field()}}
                <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection