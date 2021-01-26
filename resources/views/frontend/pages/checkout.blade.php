@extends('frontend.layout')
@section('title', 'Đặt hàng')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Đặt hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- content-wraper start -->
<div class="content-wraper mt-95">
    <div class="container-fluid">
        @if(Auth::check())
        <form action="{{route('post-checkout')}}" method="POST">
            @csrf
            <input type="hidden" name="total_price" value="{{$subtotal}}">
            <div class="checkout-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 offset-xl-1 col-xl-5 col-sm-12">
                                <div class="checkbox-form">
                                    <h3 class="shoping-checkboxt-title">Thông tin khách hàng</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="single-form-row">
                                                <label>Họ và tên <span class="required">*</span></label>
                                                <input type="text" value="{{$user->name}}">
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="single-form-row">
                                                <label>Email<span class="required">*</span></label>
                                                <input type="text" value="{{$user->email}}">
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="single-form-row">
                                                <label>Số điện thoại</label>
                                                <input type="text"value="{{$user->phone}}">
                                            </p>
                                        </div>

                                        <div class="col-lg-12">
                                            <p class="single-form-row">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input type="text" value="{{$user->address}}" id="address">

                                            </p>
                                        </div>

                                        <div class="col-lg-12">
                                            <p class="single-form-row">
                                                <label>Địa chỉ nhận hàng<span class="required">*</span></label>
                                                <input type="text" name="address_ship" id="old_add">
                                                @error('address_ship')
                                                <span style="color: red">{{$message}}</span>
                                                @enderror
                                            </p>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="" id="new_add" value="" >
                                                    Giống địa chỉ của tôi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  col-xl-5 col-sm-12">
                                <div class="checkout-review-order">
                                    <h3 class="shoping-checkboxt-title">Đơn hàng của bạn</h3>
                                    <table class="checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="t-product-name">Sản phẩm</th>
                                                <th class="product-total">Tổng Số</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(Cart::content() as $value)
                                            <tr class="cart_item">
                                                <td class="t-product-name">{{$value->name}}<strong class="product-quantity">× {{$value->qty}}</strong></td>
                                                <td class="t-product-price"><span>{{number_format($value->price*$value->qty)}} đ</span></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Thành tiền</th>
                                                <td><span>{{number_format($subtotal)}} đ</span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Phí giao hàng</th>
                                                <td>Free shipping</td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Tổng tiền</th>
                                                <td><strong><span>{{number_format($subtotal)}} đ</span></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="checkout-payment">
                                        <button class="button-continue-payment" type="submit">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @else
        <div class="row">
            <div class="col-lg-12 col-xl-10 offset-xl-1">
                <!-- coupon-area start -->
                <div class="coupon-area mb-60">
                    <div class="coupon-accordion">
                        <h3>Returning customer? <span id="showlogin" class="coupon">Đăng nhập để đặt hàng</span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <form action="{{route('post-checkout-login')}}" method="POST">
                                    @csrf
                                    <p class="coupon-input form-row-first">
                                        <label>Email<span class="required">*</span></label>
                                        <input type="text" name="email">
                                    </p>
                                    <p class="coupon-input form-row-last">
                                        <label>Mật khẩu <span class="required">*</span></label>
                                        <input type="password" name="password">
                                    </p>
                                    <div class="clear"></div>
                                    <p>
                                        <button value="Login" name="login" class="button-login" type="submit">Đăng nhập</button>
                                        <label><input type="checkbox" value="1"><span>Nhớ tôi</span></label>
                                    </p>
                                    <p class="lost-password">
                                        <a href="{{route('recoverpass')}}">Quên mật khẩu?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- coupon-area end -->
            </div>
        </div>
        <div class="checkout-area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 offset-xl-1 col-xl-5 col-sm-12">
                        </div>
                        <div class="col-lg-6  col-xl-5 col-sm-12">
                            <div class="checkout-review-order">
                                <h3 class="shoping-checkboxt-title">Đơn hàng của bạn</h3>
                                <table class="checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="t-product-name">Sản phẩm</th>
                                            <th class="product-total">Tổng số</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(Cart::content() as $value)
                                        <tr class="cart_item">
                                            <td class="t-product-name">{{$value->name}}<strong class="product-quantity">× {{$value->qty}}</strong></td>
                                            <td class="t-product-price"><span>{{number_format($value->price)}} đ</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Thành tiền</th>
                                            <td><span>{{number_format($subtotal)}} đ</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Phí giao hàng</th>
                                            <td>Free shipping</td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng tiền</th>
                                            <td><strong><span>{{number_format($subtotal)}} đ</span></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="checkout-payment">
                                    <button class="button-continue-payment" type="submit">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- checkout-area start -->

        <!-- checkout-area end -->
    </div>
</div>
<!-- content-wraper end -->
@endsection
