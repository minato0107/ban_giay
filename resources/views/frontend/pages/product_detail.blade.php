@extends('frontend.layout')
@section('title', 'Chi tiết sản phẩm')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Cửa hàng</li>
                    <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- content-wraper start -->
<div class="content-wraper mt-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row single-product-area">
                    <div class="col-xl-4  col-lg-6 offset-xl-1 col-md-5 col-sm-12">
                        <div class="single-product-tab">
                            <div class="zoomWrapper">
                                <div id="img-1" class="zoomWrapper single-zoom">
                                    <a href="#">
                                        <img id="zoom1" src="{{url('public/uploads')}}/{{$product_slug->image}}" data-zoom-image="{{url('public/uploads')}}/{{$product_slug->image}}" alt="big-1">
                                    </a>
                                </div>
                                <div class="single-zoom-thumb">
                                    <ul class="s-tab-zoom single-product-active owl-carousel" id="gallery_01">
                                        @foreach($image_pro as $value)
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{url('public/uploads')}}/{{$value->image}}" data-zoom-image="{{url('public/uploads')}}/{{$value->image}}"><img src="{{url('public/uploads')}}/{{$value->image}}" alt="zo-th-1"/></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-7 col-sm-12">
                        <!-- product-thumbnail-content start -->
                        <form action="{{route('add-cart', $product_detail->id)}}" method="POST">
                            @csrf
                            <div class="quick-view-content">
                                <div class="product-info">
                                    <h2>{{$product_slug->name}}</h2>
                                    <div class="rating-box">
                                        <ul class="rating">

                                        </ul>
                                    </div>
                                    <div class="price-box">
                                     @if($value->sale_price>0)
                                     <span class="new-price">{{number_format($product_slug->sale_price)}} đ</span>
                                     <span class="old-price">{{number_format($product_slug->price)}} đ</span>
                                     @else
                                     <span class="new-price">{{number_format($product_slug->price)}} đ</span>
                                     @endif
                                 </div>
                                 <div class="modal-size">
                                    <h4>Kích cỡ</h4>
                                    <ul class="flex">
                                        @foreach($list as $value)
                                        <li><a href="{{route('product_detail', [$product_slug->slug, $value->id])}}" class="circle {{$value->id == $product_detail->id?'border':''}}">{{$value->size->value}}</a></li>
                                        @if($value->id == $product_detail->id)
                                        <input type="hidden" name="size" value="{{$value->size->value}}">
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="modal-color">
                                    <h4>Màu sắc</h4>
                                    <div class="color-list">
                                        <ul role="tablist">
                                            @foreach($attr as $value)
                                            @if(in_array($value->id, $id_attr->color))

                                            <li class="tab__item nav-item active">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="radio" value="{{$value->value}}" name="color" checked><i class="fa fa-user" style="color: {{$value->value}}"></i>
                                                    </label>
                                                </div>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="quick-add-to-cart">
                                    <div class="quantity">
                                        <label>Số lượng</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" value="1" min="1" max="{{$product_detail->quantity}}" name="qty">
                                        </div>
                                    </div>
                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                    @if(Auth::check())
                                    <a class="btn add-to-cart" href="{{route('post-wishlist', [$user->id, $product_detail->id])}}">Yêu thích</a>
                                    @else
                                    <a class="btn add-to-cart" href="{{route('login')}}">Yêu thích</a>
                                    @endif
                                </div>
                                <div class="instock">
                                    @if($product_detail->quantity>0)
                                    <p>Có {{$product_detail->quantity}} sản phẩm trong kho</p>
                                    @else
                                    <p>Hết hàng</p>
                                    @endif
                                </div>
                                <div class="social-sharing">
                                    <h3>Chia sẻ</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- product-thumbnail-content end -->
                </div>
            </div>
        </div>
    </div>
    <div class="product-info-review">
        <div class="row">
            <div class="col">
                <div class="product-info-detailed">
                    <div class="discription-tab-menu">
                        <ul role="tablist" class="nav">
                            <li class="active"><a href="#description" data-toggle="tab" class="active show">Mô tả</a></li>
                            <li><a href="#review" data-toggle="tab">Đánh giá ({{$reviews->count()}})</a></li>
                        </ul>
                    </div>
                </div>
                <div class="discription-content">
                    <div class="tab-content">
                        <div class="tab-pane fade in active show" id="description">
                            <div class="description-content">
                                <p>{!!$product_slug->description!!}</p>
                            </div>
                        </div>
                        <div id="review" class="tab-pane fade">
                            <div class="comments-area ptb-60">
                                <!-- Single Comment Start -->
                                <div class="row mb-40">
                                    <div class="card card-color col-md-3 mr-1">
                                        <div class="card-body">
                                            <h4 class="title">Đánh giá trung bình</h4>
                                            <p class="score text-red">
                                                <span>{{ $star }}</span>
                                            /5</p>
                                            <div clas="p-review-text">
                                                <div class="rating-number">
                                                    @for ($i = 0; $i < $star; $i++)
                                                    <i class="fa fa-star text-yellow"></i>
                                                    @endfor
                                                    @for ($i = 0; $i < 5 - $star; $i++)
                                                    <i class="fa fa-star"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                            <p>({{ $reviews->count() }} nhận xét)</p>
                                        </div>
                                    </div>
                                    @if ($star > 0)
                                    <div class="card col mr-1 card-color">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <span>5</span>
                                                    <i class="fa fa-star text-yellow"></i>
                                                </div>
                                                <div class="col btn-lg">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-green" role="progressbar"
                                                        style="width: {{ ($five / $reviews->count()) * 100 }}%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                {{ ceil(($five / $reviews->count()) * 100) }}%
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <span>4</span>
                                                <i class="fa fa-star text-yellow"></i>
                                            </div>
                                            <div class="col btn-lg">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: {{ ($four / $reviews->count()) * 100 }}%;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            {{ ceil(($four / $reviews->count()) * 100) }} %
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <span>3</span>
                                            <i class="fa fa-star text-yellow"></i>
                                        </div>
                                        <div class="col btn-lg">
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                style="width: {{ ($three / $reviews->count()) * 100 }}%;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        {{ ceil(($three / $reviews->count()) * 100) }}%
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <span>2</span>
                                        <i class="fa fa-star text-yellow"></i>
                                    </div>
                                    <div class="col btn-lg">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: {{ ($two / $reviews->count()) * 100 }}%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    {{ ceil(($two / $reviews->count()) * 100) }}%
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <span>1</span>
                                    <i class="fa fa-star text-yellow"></i>
                                </div>
                                <div class="col btn-lg">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($one / $reviews->count()) * 100 }}%;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                {{ ceil(($one / $reviews->count()) * 100) }}%
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="card col mr-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <span>5</span>
                                <i class="fa fa-star text-yellow"></i>
                            </div>
                            <div class="col btn-lg">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar"
                                    style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            0%
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <span>4</span>
                            <i class="fa fa-star text-yellow"></i>
                        </div>
                        <div class="col btn-lg">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar"
                                style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        0%
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <span>3</span>
                        <i class="fa fa-star text-yellow"></i>
                    </div>
                    <div class="col btn-lg">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar"
                            style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    0%
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <span>2</span>
                    <i class="fa fa-star text-yellow"></i>
                </div>
                <div class="col btn-lg">
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar"
                        style="width:0%;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="col-2">
                0%
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <span>1</span>
                <i class="fa fa-star text-yellow"></i>
            </div>
            <div class="col btn-lg">
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar"
                    style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100">
                </div>
            </div>
        </div>
        <div class="col-2">
            0%
        </div>
    </div>
</div>
</div>
@endif
<div class="card card-color col mr-1">
    <div class="card-body fix-flex">
        <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Viết đánh giá của bạn</a>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-6">
       <div class="card card-color" >
        <div class="card-body">
            @foreach($reviews as $item)
            <div class="single-review-item mb-20 row">
                <div class="review-logo avatar mr-10">
                    @if ($item->users->avatar)
                    <img src="{{ url('public/uploads/User') }}/{{ $item->users->avatar }}"
                    alt="" style="width: 95px; height: 95px" class="circle">
                    @else
                    <img src="{{ url('public/frontend') }}/img/unnamed.jpg" style="width: 95px; height: 95px" alt="" class="circle">
                    @endif
                </div>
                <div class="p-review-text col mr-1 border-black">
                    <div class="rating-number">
                        @for ($i = 0; $i < $item->star; $i++)
                        <i class="fa fa-star text-yellow"></i>
                        @endfor
                        @for ($i = 0; $i < 5 - $item->star; $i++)
                        <i class="fa fa-star"></i>
                        @endfor
                    </div>
                    <span class="p-review-info">{{$item->users->name}}<span></span> - {{$item->created_at}}
                </span>
                <p>{{$item->content}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
</div>
<!-- Single Comment End -->
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- content-wraper end -->

<!-- product-area start -->
<div class="product-area ptb-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section-title-3">
                    <h2>Sản phẩm liên quan: </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-active-3 owl-carousel">
                @foreach($product_cate as $value)
                <div class="col">
                    <!-- single-product-wrap start -->
                    <div class="single-product-wrap">
                        <div class="product-image">
                            <a href="{{route('product_detail',['slug'=>$value->slug,'id_detail'=>$value->id_detail])}}">
                                <img class="primary-image" src="{{url('public/uploads')}}/{{$value->image}}" alt="">
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
                                <h4><a class="product_name" href="single-product.html">{{$value->name}}</a></h4>
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
                                    <li><a class="links-details" href="{{route('product_detail',['slug'=>$value->slug,'id_detail'=>$value->id_detail])}}"><i class="ion-clipboard"></i></a></li>
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
@if(Auth::check())
<div class="modal fade" id="modal-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Đánh giá của bạn:</h5>
            <button type="button" class="close bg-green text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container p-5">
                <form action="{{ route('review', $product_slug->slug) }}" method="POST" role="form">
                    @csrf
                    <label for="">Ratting</label>
                    <fieldset class="starability-fade">
                        <input type="radio" id="rate1" name="star" value="1" />
                        <label for="rate1" title="Rất tệ">1 star</label>
                        <input type="radio" id="rate2" name="star" value="2" />
                        <label for="rate2" title="Không tốt">2 stars</label>
                        <input type="radio" id="rate3" name="star" value="3" />
                        <label for="rate3" title="Bình thường">3 stars</label>
                        <input type="radio" id="rate4" name="star" value="4" />
                        <label for="rate4" title="Rất tốt">4 stars</label>
                        <input type="radio" id="rate5" name="star" value="5" checked />
                        <label for="rate5" title="Tuyệt">5 stars</label>
                    </fieldset>
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea name="content" id="content" class="form-control" rows="2"> </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@else
<div class="modal fade" id="modal-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
            <button type="button" class="close bg-green text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container p-5">

                <form action="{{ route('post_review_login') }}" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khảu</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-success">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endif
<!-- product-area end -->
@endsection
