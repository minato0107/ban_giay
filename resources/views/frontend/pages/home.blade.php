@extends('frontend.layout')
{{-- Thay đổi tiêu đề trang --}}
@section('title', 'Trang chủ')
@section('content')
<!-- slider-main-area start -->
<div class="slider-main-area">
    <div class="slider-active owl-carousel">
        <!-- slider-wrapper start -->
        @foreach($banner as $value)
        <div class="slider-wrapper" style="background-image:url('public/uploads/{{$value->image}}')">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-lg-11 col-md-11">
                        <div class="slider-text-info style-1 slider-text-animation">
                            <h4 class="title1">{{$value->title}}</h4>
                            <h1 class="title2"><span>for</span> gender</h1>
                            <div class="slier-btn-1">
                                <a title="shop now" href="{{route('shop')}}" class="shop-btn">Shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- slider-wrapper end -->
    </div>
</div>
<!-- slider-main-area end -->

<!-- our-service-area  start -->
<div class="our-service-area mtb-40">
    <div class="container-fluid">
        <div class="our-service-inner">
            <div class="col-custom">
                <div class="single-service">
                    <div class="service-icon">
                        <img src="{{url('public/frontend')}}/img/icon/1.png" alt="">
                    </div>
                    <div class="serivce-cont">
                        <h3>Miễn phí ship</h3>
                        <p>Miễn phí ship tất cả các đơn hàng</p>
                    </div>
                </div>
            </div>
            <div class="col-custom">
                <div class="single-service">
                    <div class="service-icon">
                        <img src="{{url('public/frontend')}}/img/icon/2.png" alt="">
                    </div>
                    <div class="serivce-cont">
                        <h3>Hỗ trợ 24/7</h3>
                        <p>Hỗ trợ trực tuyến 24 giờ</p>
                    </div>
                </div>
            </div>
            <div class="col-custom">
                <div class="single-service">
                    <div class="service-icon">
                        <img src="{{url('public/frontend')}}/img/icon/3.png" alt="">
                    </div>
                    <div class="serivce-cont">
                        <h3>Hoàn tiền</h3>
                        <p>Hoàn tiền trong 7 ngày</p>
                    </div>
                </div>
            </div>
            <div class="col-custom">
                <div class="single-service">
                    <div class="service-icon">
                        <img src="{{url('public/frontend')}}/img/icon/4.png" alt="">
                    </div>
                    <div class="serivce-cont">
                        <h3>Giảm giá thành viên</h3>
                        <p>Lên đến 500.000 đ</p>
                    </div>
                </div>
            </div>
            <div class="col-custom">
                <div class="single-service">
                    <div class="service-icon">
                        <img src="{{url('public/frontend')}}/img/icon/5.png" alt="">
                    </div>
                    <div class="serivce-cont">
                        <h3>Thanh toán bảo mật</h3>
                        <p>Tất cả các thẻ được chấp nhận</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our-service-area  end -->

<!-- banner-area start -->
<div class="banner-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-custom-4 col">
                <!--single-banner-box start -->
                <div class="single-banner-box mb-20">
                    <a href="#"><img src="{{url('public/uploads')}}/{{$ads1->value}}" alt=""></a>
                </div>
                <!--single-banner-box end -->
                <!--single-banner-box start -->
                <div class="single-banner-box">
                    <a href="#"><img src="{{url('public/uploads')}}/{{$ads2->value}}" alt=""></a>
                </div>
                <!--single-banner-box end -->
            </div>
            <div class="col-lg-4 centeritem col">
                <!--single-banner-box start -->
                <div class="single-banner-box">
                    <a href="#"><img src="{{url('public/uploads')}}/{{$ads3->value}}" alt=""></a>
                </div>
                <!--single-banner-box end -->
            </div>
            <div class="col-lg-4 col-custom-4 col">
                <!--single-banner-box start -->
                <div class="single-banner-box mb-20">
                    <a href="#"><img src="{{url('public/uploads')}}/{{$ads4->value}}" alt=""></a>
                </div>
                <!--single-banner-box end -->
                <!--single-banner-box start -->
                <div class="single-banner-box">
                    <a href="#"><img src="{{url('public/uploads')}}/{{$ads5->value}}" alt=""></a>
                </div>
                <!--single-banner-box end -->
            </div>
        </div>
    </div>
</div>
<!-- banner-area end -->

<!-- product-area start -->
<div class="product-area pt-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <!-- product-tabs-list start -->
                    <div class="product-tabs-list">
                        <ul role="tablist" class="nav">
                         <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="new-arrivals" href="#new-arrivals" class="active show" aria-selected="true">Hàng mới về</a></li>
                         <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="on-sellers" href="#on-sellers"> Sản phẩm nổi bật</a></li>
                     </ul>
                 </div>
                 <!-- product-tabs-list end -->
             </div>
         </div>
         <div class="col-lg-12">
            <div class="section-title-dic">
                <p>Cửa hàng của chúng tôi không chỉ là một nhà bán lẻ trực tuyến trung bình khác. Chúng tôi không chỉ bán các sản phẩm chất lượng hàng đầu mà còn mang đến cho khách hàng trải nghiệm mua sắm trực tuyến tuyệt vời.</p>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div id="new-arrivals" class="tab-pane active show" role="tabpanel">
            <div class="row">
                <div class="product-active owl-carousel">
                    @foreach($product_new as $value)
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="{{route('product_detail', [$value->slug, $value->id_detail])}}">
                                    <img class="primary-image" src="{{url('public/uploads')}}/{{$value->image}}" alt="" style="width: 234px; height: 234px">
                                   {{--  <img class="secondary-image" src="{{url('public/frontend')}}/img/product/2.jpg" alt=""> --}}
                                </a>
                                @if($value->sale_price>0)
                                <div class="label-product">Giảm giá đến -{{ceil((($value->price-$value->sale_price)/($value->price))*100) }}%</div>
                                @endif
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">
                                        <ul class="rating">

                                        </ul>
                                    </div>
                                    <h4><a class="product_name" href="{{route('product_detail', [$value->slug, $value->id_detail])}}">{{$value->name}}</a></h4>
                                    <div class="price-box">
                                        @if($value->sale_price>0)
                                        <span class="new-price">{{number_format($value->sale_price)}} đ</span>
                                        <span class="old-price">{{number_format($value->price)}} đ</span>
                                        @else
                                        <span class="new-price">{{number_format($value->price)}} đ</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li><a class="links-details" href="{{route('product_detail', [$value->slug, $value->id_detail])}}"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="on-sellers" class="tab-pane" role="tabpanel">
            <div class="row">
                <div class="product-active owl-carousel">
                    @foreach($product_featured as $value)
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="{{route('product_detail', [$value->slug, $value->id_detail])}}">
                                    <img class="primary-image" src="{{url('public/uploads')}}/{{$value->image}}" alt="" style="width: 234px; height: 234px">
                                </a>
                                 @if($value->sale_price>0)
                                <div class="label-product">Giảm giá đến -{{ceil((($value->price-$value->sale_price)/($value->price))*100) }}%</div>
                                @endif
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">

                                    </div>
                                    <h4><a class="product_name" href="{{route('product_detail', [$value->slug, $value->id_detail])}}">{{$value->name}}</a></h4>
                                    <div class="price-box">
                                        @if($value->sale_price>0)
                                        <span class="new-price">{{number_format($value->sale_price)}} đ</span>
                                        <span class="old-price">{{number_format($value->price)}} đ</span>
                                        @else
                                        <span class="new-price">{{number_format($value->price)}} đ</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li><a class="links-details" href="{{route('product_detail', [$value->slug, $value->id_detail])}}"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- product-area end -->

<!-- banner-area start -->
<div class="banner-area ptb-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-banner-box-2">
                    <a href="#"><img src="{{url('public/uploads')}}/{{$ads6->value}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area end -->
@endsection
