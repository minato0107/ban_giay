@extends('backend.layout')
@section('title', 'Chi tiết đơn hàng')
@section('text', 'Chi tiết đơn hàng')
@section('text1', 'Đơn hàng')
@section('content')
<div class="row fix-row">
    <div class="col-12">
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold text-green">Đơn hàng số:
                    <span class="font-weight-bold">{{ $orders->id }}</span>
                </h3>
                <h5 class="card-text">Tên khách hàng:
                    <span class="font-weight-bold"> {{ $orders->users->name }}</span>
                </h5>
                <h5 class="card-text">Số điện thọai:
                    <span class="font-weight-bold"> {{ $orders->users->phone }}</span></h5>
                <h5 class="card-text">Địa chỉ nhận hàng:
                    <span class="font-weight-bold">{{ $orders->address_ship }}</span>
                </h5>
                <h5 class="card-text">Ngày đặt hàng:
                    <span class="font-weight-bold"> {{ $orders->created_at }}</span>
                </h5>
                <h5 class="card-text">Trạng thái:
                    <span class="font-weight-bold">
                        @if ($orders->status == 0)
                            <span class="badge badge-secondary ">Chưa xử lý</span>
                        @endif
                        @if ($orders->status == 1)
                            <span class="badge badge-warning">Đã xử lý</span>
                        @endif
                        @if ($orders->status == 2)
                            <span class="badge badge-success">Đang giao hàng</span>
                        @endif
                        @if ($orders->status == 3)
                            <span class="badge badge-success">Đã nhận hàng</span>
                        @endif
                        @if ($orders->status == 4)
                            <span class="badge badge-danger">Đã hủy hàng</span>
                        @endif
                    </span>
                </h5>
                <hr>
                <form action="{{route('order_detail.status', $orders->id)}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label class="text-danger" for="">Cập nhật trạng thái</label>
                            <select name="status" id="input" class="form-control col-6" required="required">
                                <option value="1" {{$orders->status ==1?'selected':''}} {{$orders->status>1?'disabled':''}}>Đã xử lý</option>
                                <option value="2" {{$orders->status ==2?'selected':''}} {{$orders->status>2?'disabled':''}}>Đang Giao hàng</option>
                                <option value="3" {{$orders->status ==3?'selected':''}}>Đã nhận hàng</option>
                            </select>
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info" onclick="return confirm('Cập nhật trạng thái đơn hàng không?')">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order_details as $key=>$value)
                            <tr>
                                {{-- {{$value->order_pro}} --}}
                                <td class="text-center">{{($loop->iteration)}}</td>
                                <td><img src="{{url('public/uploads')}}/{{$value->order_pro->product_details->image}}" alt="" style="max-width: 50px"></td>
                                <td>
                                    <span style="display: block;">{{$value->order_pro->product_details->name}}</span>
                                    <span>size: {{$value->size}}</span>
                                    <span>color: <i class="lni lni-android-original" style="color: {{$value->color}}"></i></span>
                                </td>
                                <td>{{number_format($value->price)}} đ</td>
                                <td>{{$value->quantity}}</td>
                                <td>{{number_format($value->price*$value->quantity)}} đ</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="font-weight-bold font-size-16">Tổng tiền</td>
                                <td colspan="7" class="font-weight-bold text-red font-size-16 text-right">{{number_format($orders->total_price)}} đ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
