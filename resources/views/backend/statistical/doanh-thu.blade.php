@extends('backend.layout')
@section('title', 'Doanh thu')
@section('text', 'Doanh thu')
@section('text1', 'Thống kê')
@section('content')
<div class="row fix-row">
    <div class="col-12">
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <h2>Tổng doanh thu đang có là: {{number_format($total)}} đ</h2>
    <table class="table table-bordered nowrap dataTable no-footer dtr-inline table-hover" id="table_id" aria-describedby="datatable-buttons_info" style="max-width: 100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên khách hàng</th>
                <th>Tổng tiền</th>
                <th>Địa chỉ ship</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doanh_thu as $key=>$value)
            <tr>
                <td class="text-center">{{($loop->iteration)}}</td>
                <td>{{$value->users->name}}</td>
                <td>{{number_format($value->total_price)}} đ</td>
                <td>{{$value->address_ship}}</td>
                <td>
                            <span class="badge badge-success">Đã nhận hàng</span>
                </td>
                <td>
                    <a href="{{route('order_detail.index', $value->id)}}" data-toggle="tooltip" data-placement="top" data-original-title="Chi tiết" class="btn btn-success" style="margin-right: 5px"><i class="fadeIn animated bx bx-detail"></i></a>
               </td>
           </tr>
           @endforeach
       </tbody>
   </table>
</div>
    </div>
</div>
</div>
</div>
@endsection
