
@extends('backend.layouts.index')

@section('title')
Danh sach loai san pham
@endsection

@section('main-content')
<h2><span style="color:#f94141"><b>DANH SÁCH ĐƠN ĐẶT HÀNG</b></span></h2>
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
        <th>Ngày lập</th>
        <th>Ngày giao</th>
        <th>HTTT</th>
        <th>Khách hàng</th>
        <th>Trạng thái TT</th>
        <td></td>
        <td></td>
    </tr>
    </thead>
     <tbody>
    @foreach($ds_dh as $donhang)
        <tr>
            <td>{{$donhang ->dh_ma}}</td>
            <td>{{$donhang ->dh_ngayLap}}</td>
            <td>{{$donhang ->dh_ngayGiao}}</td>         
            <td>{{ $donhang->hinhTTT->httt_ten }}</td>
            <td>{{ $donhang->khachHangs->kh_hoTen }}</td>
            <td>
                @if($donhang ->dh_trangThaiThanhToan == 1)
                
                    <span style="color:#d35400;">Chưa xác nhận</span>
                @else
					<span style="color:#27ae60;"> Đã xác nhận</span>
				@endif
            </td>
            <td><a href="{{route('danhsachloai.edit',['id'=> $donhang->dh_ma]) }}"><button type="button" class="btn btn-warning">Xác nhận</button></a></td>
            <td>
                <form method="post" action="{{ route('danhsachdondathang.destroy', ['id' => $donhang->dh_ma]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {{ csrf_field()}}
                <button type="submit" class="btn btn-danger">Hủy</button>
                </form>
            </td>
            
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection