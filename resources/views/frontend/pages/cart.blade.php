@extends('frontend.layout')
@section('title', 'Giỏ hàng')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- content-wraper start -->
<div class="content-wraper mt-95">
    <div class="container-fluid" >
        <div class="row">
            @if(Cart::content()->count()>0)
            <div class="col-12" id="total">
                <div class="cart-table">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="plantmore-product-remove">remove</th>
                                    <th class="plantmore-product-thumbnail">Ảnh</th>
                                    <th class="cart-product-name">Sản phẩm</th>
                                    <th>Kích cỡ</th>
                                    <th>Màu sắc</th>
                                    <th class="plantmore-product-price">Giá</th>
                                    <th class="plantmore-product-quantity">Số lượng</th>
                                    <th class="plantmore-product-subtotal">Tổng số</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(Cart::content() as $value)
                                <p>{{$value->id_detail}}</p>
                                <tr>
                                    <td class="plantmore-product-remove"><a rowId="{{$value->rowId}}" href="" class="remove"><i class="fa fa-times"></i></a></td>
                                    <td class="plantmore-product-thumbnail"><a href="{{route('product_detail', [$value->slug, $value->id])}}"><img src="{{url('public/uploads')}}/{{$value->image}}" alt="" style="width: 50px; height: 50px;"></a></td>
                                    <td class="plantmore-product-name"><a href="{{route('product_detail', [$value->slug, $value->id])}}">{{$value->name}}</a></td>
                                    <td>{{$value->options->size}}</td>
                                    <td><i class="fa fa-user" style="color: {{$value->options->color}}"></i></td>
                                    <td class="plantmore-product-price"><span class="amount">{{number_format($value->price)}} đ</span></td>
                                    <td class="plantmore-product-quantity">
                                        @csrf
                                            <input value="{{$value->qty}}" type="number" name="qty" class="update" data-id="{{$value->rowId}}" min="1" max="">
                                    </td>
                                    <td class="product-subtotal"><span class="amount">{{number_format($value->price*$value->qty)}} đ</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon">

                                </div>
                                <div class="coupon2">
                                    <a href="{{route('destroy-cart')}}" class="btn btn-danger destroy">Xóa giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-95">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Tổng giỏ hàng</h2>
                                <ul>
                                    <li>Thành tiền <span>{{number_format($subtotal)}} đ</span></li>
                                    <li>Phí ship <span>Free ship</li>
                                    <li>Tổng tiền <span>{{number_format($subtotal)}} đ</span></li>
                                </ul>
                                <a href="{{route('checkout')}}">Đặt hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-12 mb-95">
                <h4>
                <strong>Giỏ hàng trống</strong>
                , quay lại <strong><a href="{{ route('shop') }}">shop</a></strong> để tiếp tục mua hàng.
                </h4>
                    <a href="{{route('shop')}}" class="btn btn-success">Mua hàng</a>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- content-wraper end -->
@endsection
