@extends('backend.layout')
@section('title', 'Tồn kho')
@section('text', 'Tồn kho')
@section('text1', 'Thống kê')
@section('content')
<div class="row fix-row">
    <div class="col-12">
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered nowrap dataTable no-footer dtr-inline table-hover" id="table_id" aria-describedby="datatable-buttons_info">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Đơn vị</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ton_kho as $key=>$value)
                    <tr>
                        <td class="text-center">{{($loop->iteration)}}</td>
                        <td>{{$value->sku}}</td>
                        <td><img src="{{url('public/uploads')}}/{{$value->product_details->image}}" alt="" style="max-width: 50px"></td>
                        <td>{{$value->product_details->name}}</td>
                        <td>
                            @if($value->product_details->sale_price>0)
                            {{number_format($value->product_details->sale_price)}} đ
                            @else
                            {{number_format($value->product_details->price)}} đ
                            @endif
                        </td>
                        <td>{{$value->quantity}}</td>
                        <td>
                            @if($value->status == 1)
                            <span class="badge badge-success">Hiện</span>
                            @else
                            <span class="badge badge-danger">Ẩn</span>
                            @endif
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
