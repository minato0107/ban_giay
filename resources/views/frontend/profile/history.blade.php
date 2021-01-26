@extends('frontend.layout')
@section('title', 'Lịch sử mua hàng')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Lịch sử mua hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<div class="content-wraper mt-95">
    <div class="container-fluid">
        <div class="account-dashboard mtb-60">
         <div class="row">
            <div class="col-md-12 col-lg-2">
                <!-- Nav tabs -->
                <ul class="nav flex-column dashboard-list" role="tablist">
                    <li><a class="nav-link "href="{{route('profile', $user->id)}}">Tài khoản của tôi</a></li>
                    <li> <a class="nav-link" href="{{route('wishlist', $user->id)}}">Yêu thích</a></li>
                    <li> <a class="nav-link" href="{{route('change_pass', $user->id)}}">Thay đổi mật khẩu</a></li>
                    <li><a class="nav-link" href="{{route('don-mua', $user->id)}}">Đơn hàng</a></li>
                    <li><a class="nav-link active" href="{{route('lich-su', $user->id)}}">Lịch sử đơn hàng</a></li>
                    <li><a class="nav-link" href="{{route('logout')}}">Đăng xuất</a></li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-10">
                <!-- Tab panes -->
                @if($history->count()>0)
                @foreach($history as $value)
                <div class="tab-content dashboard-content card-color mb-95">
                    <div id="dashboard" class="tab-pane fade show active">
                        <!-- cart start -->
                        <div class="tab-content" id="v-pills-tabContent">
                            <table class="table table-bordered nowrap dataTable no-footer dtr-inline table-hover" id="table_id" aria-describedby="datatable-buttons_info" style="max-width: 100%">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5>Trạng thái:
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
                                        </h5>
                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ảnh</th>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Địa chỉ ship</th>
                                        <th>Ngày đặt hàng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($value->order_details as $key=>$data)
                                    <tr>
                                        <td class="text-center">{{($loop->iteration)}}</td>
                                        <td><img src="{{url('public/uploads')}}/{{$data->order_pro->product_details->image}}" alt="" style="max-width: 50px"></td>
                                        <td>
                                            <span style="display: block;">{{$data->order_pro->product_details->name}}</span>
                                            Size : {{$data->size}}, Color: <i class="fa fa-user" style="color: {{$data->color}}"></i>
                                        </td>
                                        <td>{{$data->quantity}}</td>
                                        <td>{{number_format($data->price)}} đ</td>
                                        <td>{{$value->address_ship}}</td>
                                        <td>{{$value->created_at}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--End of Update Form-->
                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="col-md-4">

                                    <h2>
                                        <p style="font-size: 18px">Số tiền thanh toán :</p>
                                        <span style="display: block; color: red">{{number_format($value->total_price)}} đ</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- cart end -->
                @endforeach
                @else
                <div class="tab-content dashboard-content card-color mb-95">
                    <div class="cart-main-area  section-space--ptb_90">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="shoping-update-area row">
                                        <div class="continue-shopping-butotn col-6 mt-30">
                                            <h4>
                                                <strong>Chưa có đơn hàng nào</strong>
                                                , quay lại <strong><a href="{{ route('shop') }}">shop</a></strong> để  mua hàng.
                                            </h4>
                                            <a class="btn btn-success" href="{{route('shop')}}">Mua hàng</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endif

                            <!-- cart end -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Product Area End -->

</div>

@endsection
