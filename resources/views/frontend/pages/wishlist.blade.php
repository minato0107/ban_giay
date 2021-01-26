@extends('frontend.layout')
@section('title', 'Yêu thích')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Yêu thích</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- content-wraper start -->
<div class="content-wraper mt-95">
    <div class="container-fluid">
        <div class="account-dashboard mtb-60">
           <div class="row">
            <div class="col-md-12 col-lg-2">
                <!-- Nav tabs -->
                <ul class="nav flex-column dashboard-list" role="tablist">
                    <li><a class="nav-link "href="{{route('profile', $user->id)}}">Tài khoản của tôi</a></li>
                    <li> <a class="nav-link active" href="{{route('wishlist', $user->id)}}">Yêu thích</a></li>
                    <li> <a class="nav-link" href="{{route('change_pass', $user->id)}}">Thay đổi mật khẩu</a></li>
                    <li><a class="nav-link" href="{{route('don-mua', $user->id)}}">Đơn hàng</a></li>
                    <li><a class="nav-link" href="{{route('lich-su', $user->id)}}">Lịch sử đơn hàng</a></li>
                    <li><a class="nav-link" href="{{route('logout')}}">Đăng xuất</a></li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-10">
                <!-- Tab panes -->
                <div class="content-wraper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <form action="#">
                                    <div class=" table-content table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="plantmore-product-remove">Xóa</th>
                                                    <th class="plantmore-product-thumbnail">Ảnh</th>
                                                    <th class="cart-product-name">Sản phẩm</th>
                                                    <th class="plantmore-product-price">Giá</th>
                                                    <th class="plantmore-product-stock-status">Trạng thái kho</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($wishlist as $value)
                                                <tr>
                                                    <td class="plantmore-product-remove"><a href="{{route('delete-wishlist',[$value->id_user, $value->id])}}"><i class="fa fa-times"></i></a></td>
                                                    <td class="plantmore-product-thumbnail"><a href="#"><img alt="" src="{{url('public/uploads')}}/{{$value->wishlists->product_details->image}}" style="max-width: 50px"></a></td>
                                                    <td class="plantmore-product-name"><a href="#">{{$value->wishlists->product_details->name}}</a></td>
                                                    @if($value->sale_price>0)
                                                    <td class="plantmore-product-price"><span class="amount">{{number_format($value->wishlists->product_details->price)}} đ</span></td>
                                                    @else
                                                    <td class="plantmore-product-price"><span class="amount">{{number_format($value->wishlists->product_details->price)}} đ</span></td>
                                                    @endif
                                                    @if($value->wishlists->quantity>0)
                                                    <td class="plantmore-product-stock-status"><span class="in-stock">Còn {{$value->wishlists->quantity}} trong kho</span></td>
                                                    @else
                                                    <td class="plantmore-product-stock-status"><span class="in-stock">Đã hết hàng</span></td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->
@endsection
