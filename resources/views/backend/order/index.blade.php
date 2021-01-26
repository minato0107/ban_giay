@extends('backend.layout')
@section('title', 'Danh sách đơn hàng')
@section('text', 'Danh sách đơn hàng')
@section('text1', 'Đơn hàng')
@section('content')
<div class="row fix-row">
    <div class="col-12">
<div class="card">
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered nowrap dataTable no-footer dtr-inline table-hover" id="table_id" aria-describedby="datatable-buttons_info" style="max-width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên khách hàng</th>
                        <th>Giá</th>
                        <th>Địa chỉ ship</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $key=>$value)
                    <tr>
                        <td class="text-center">{{($loop->iteration)}}</td>
                        <td>{{$value->users->name}}</td>
                        <td>{{number_format($value->total_price)}} đ</td>
                        <td>{{$value->address_ship}}</td>
                        <td>
                            @if ($value->status == 0)
                            <span class="badge badge-secondary ">Chưa xử lý</span>
                            @endif
                            @if ($value->status == 1)
                            <span class="badge badge-warning">Đã xử lý</span>
                            @endif
                            @if ($value->status == 2)
                            <span class="badge badge-success">Đang giao hàng</span>
                            @endif
                            @if ($value->status == 3)
                            <span class="badge badge-success">Đã nhận hàng</span>
                            @endif
                            @if ($value->status == 4)
                            <span class="badge badge-danger">Đã hủy hàng</span>
                            @endif
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
