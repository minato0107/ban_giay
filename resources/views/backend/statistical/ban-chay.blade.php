@extends('backend.layout')
@section('title', 'Bán chạy')
@section('text', 'Bán chạy')
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
                <th>Sản phẩm</th>
                <th>Kích cỡ</th>
                <th>Màu sắc</th>
                <th>Giá</th>
                <th>Số lượng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ban_chay as $key=>$value)
            <tr>
                <td class="text-center">{{($loop->iteration)}}</td>
                <td>{{$value->order_pro->sku}}</td>
                <td><img src="{{url('public/uploads')}}/{{$value->order_pro->product_details->image}}" alt="" style="max-width: 50px"></td>
                <td>{{$value->order_pro->product_details->name}}</td>
                <td>{{$value->size}}</td>
                <td><i class="lni lni-android-original" style="{{$value->color}}"></i></td>
                <td>{{number_format($value->price)}} đ</td>
                <td>{{$value->quantity}}</td>
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
