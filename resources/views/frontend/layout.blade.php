<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('public/uploads')}}/{{$logo_title->value}}">
        <!-- all CSS hear -->
        <link rel="stylesheet" href="{{url('public/frontend')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('public/frontend')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{url('public/frontend')}}/css/ionicons.min.css">
        <link rel="stylesheet" href="{{url('public/frontend')}}/css/animate.css">
        <link rel="stylesheet" href="{{url('public/frontend')}}/css/nice-select.css">
        <link rel="stylesheet" href="{{url('public/frontend')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('public/frontend')}}/css/mainmenu.css">
        <link rel="stylesheet" href="{{ url('public/frontend') }}/css/starability-fade.min.css">
        <link rel="stylesheet" href="{{url('public/frontend')}}/css/style.css">
        <link rel="stylesheet" href="{{url('public/frontend')}}/css/responsive.css">
        <link rel="stylesheet" href="{{url('public/frontend')}}/css/sweetalert2.css">

    </head>
    <body>
        <!-- Add your application content here -->

        <div class="wrapper">
            <header>
                <!-- header-top start -->
                <div class="header-top bg-black">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <!-- welcome-msg start-->
                                <div class="welcome-msg">
                                    <p>Welcome to Juta Shop</p>
                                </div>
                                <!-- welcome-msg end-->
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <!-- full-setting-area start -->
                                <div class="full-setting-area">
                                    <div class="top-dropdown">
                                        <ul>
                                            <li class="drodown-show"><span>Tiền tệ:</span> <a href="#">VND <i class="fa fa-angle-down"></i></a>
                                                <ul class="open-dropdown">
                                                    <li><a href="#">VND đ</a></li>
                                                    <li><a href="#">EUR €</a></li>
                                                </ul>
                                            </li>
                                            <li class="drodown-show"><span>Ngôn ngữ:</span> <a href="#"><img src="{{url('public/frontend')}}/img/icon/vi.png" alt="" style="width: 16px;height: 16px"> Việt Nam <i class="fa fa-angle-down"></i></a>
                                                <ul class="open-dropdown">
                                                    <li><a href="#"><img src="{{url('public/frontend')}}/img/icon/vi.png" alt="" style="width: 16px;height: 16px">Việt Nam</a></li>
                                                    <li><a href="#"><img src="{{url('public/frontend')}}/img/icon/p-1.jpg" alt=""> English</a></li>
                                                </ul>
                                            </li>
                                            <li class="drodown-show"><a href="#"> Cài đặt <i class="fa fa-angle-down"></i></a>
                                                <ul class="open-dropdown setting">
                                                    @if(Auth::check())
                                                    <li><a href="{{route('profile',$user->id)}}">Tài khoản của bạn</a></li>
                                                    <li><a href="{{route('wishlist',$user->id)}}">Yêu thích</a></li>
                                                    <li><a href="{{route('don-mua',$user->id)}}">Đơn mua</a></li>
                                                    <li><a href="{{route('lich-su',$user->id)}}">Lịch sử mua</a></li>
                                                    <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                                                    @else
                                                    <li><a href="{{route('login')}}">Đăng nhập</a></li>
                                                    <li><a href="{{route('register')}}">Đăng ký</a></li>
                                                    @endif
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- full-setting-area end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-top end -->

                <!-- header-mid-area start -->
                <div class="header-mid-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col md-custom-12">
                                <!-- logo start -->
                                <div class="logo">
                                    <a href="{{route('home')}}"><img src="{{url('public/uploads')}}/{{$logo_header->value}}" alt=""></a>
                                </div>
                                <!-- logo end -->
                            </div>
                            <div class="col-lg-9 md-custom-12">
                                <!-- shopping-cart-box start -->
                                <div class="shopping-cart-box">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="item-cart-inner">
                                                    <span class="item-cont">{{Cart::content()->count()}}</span>
                                                    Giỏ hàng
                                                </span>
                                                <div class="item-total">{{number_format($subtotal)}} đ</div>
                                            </a>
                                            <ul class="shopping-cart-wrapper">
                                                @foreach(Cart::content() as $value)
                                                <li>
                                                    <div class="shoping-cart-image">
                                                        <a href="{{route('product_detail', [$value->slug, $value->id])}}">
                                                            <img src="{{url('public/uploads')}}/{{$value->image}}" alt="" style="max-width: 100px">
                                                            <span class="product-quantity">{{$value->qty}}x</span>
                                                        </a>
                                                    </div>
                                                    <div class="shoping-product-details">
                                                        <h3><a href="{{route('product_detail', [$value->slug, $value->id])}}">{{$value->name}}</a></h3>
                                                        <div class="price-box">
                                                            @if($value->sale_price>0)
                                                            <span>{{number_format($value->sale_price)}} đ</span>
                                                            @else
                                                            <span>{{number_format($value->price)}} đ</span>
                                                            @endif
                                                        </div>
                                                        <div class="sizeandcolor">
                                                            <span>Size: {{$value->options->size}}</span>
                                                            <span>Color: <i class="fa fa-facebook" style="color: {{$value->options->color}}"></i></span>
                                                        </div>
                                                        <div class="remove">
                                                            <a href="{{route('remove-cart', $value->rowId)}}" title="Remove"><i class="ion-android-delete"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                                <li>
                                                    @if(Cart::content()->count()>0)
                                                    <div class="cart-subtotals">
                                                        <h5>Thành tiền<span class="float-right">{{number_format($subtotal)}}</span></h5>
                                                        <h5>Phí ship<span class="float-right"> Free ship</span></h5>
                                                        <h5> Tổng tiền<span class="float-right">{{number_format($subtotal)}} đ</span></h5>
                                                    </div>
                                                    @else
                                                    <div class="cart-subtotals">
                                                        <h5>Thành tiền<span class="float-right">{{number_format($subtotal)}}</span></h5>
                                                        <h5>Phí ship<span class="float-right">0 đ</span></h5>
                                                        <h5> Tổng tiền<span class="float-right">{{number_format($subtotal)}} đ</span></h5>
                                                    </div>
                                                    @endif
                                                </li>
                                                <li class="shoping-cart-btn">
                                                    <a class="checkout-btn" href="{{route('checkout')}}">Đặt hàng</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- shopping-cart-box end -->

                                <!-- searchbox start -->
                                <div class="searchbox">
                                    <form action="{{route('search')}}">
                                        @csrf
                                        <div class="search-form-input">
                                            <select id="select" name="id_cate" class="nice-select">
                                                <option value="">Tất cả danh mục</option>
                                                @foreach($cate_chil as $value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="text" placeholder="Tìm kiếm ..... " name="keyword">
                                            <button class="top-search-btn" type="submit">Tìm kiếm</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- searchbox end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-mid-area end -->

                <!-- header-bottom-area start -->
                <div class="header-bottom-area bg-black sticky-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8 d-none d-lg-block">
                                <!-- main-menu-area start -->
                                <div class="main-menu-area">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="{{route('home')}}">Trang chủ</a>
                                            </li>
                                            <li><a href="{{route('shop')}}">Giày<i class="ion-ios-arrow-down"></i></a>
                                                <ul class="mega-menu">
                                                    @foreach($category_parent as $value)
                                                    <li><a href="{{route('danh-muc', $value->slug)}}">{{$value->name}}</a>
                                                        <ul>

                                                            @foreach($cate_chil as $data)
                                                            @if($data->parent_id == $value->id)
                                                            <li><a href="{{route('danh-muc', $data->slug)}}">{{$data->name}}</a></li>
                                                            @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="{{route('shop_new')}}">Hàng mới về</a></li>
                                            <li><a href="{{route('blog')}}">Tin tức</a></li>
                                            <li><a href="{{route('contact')}}">Liên lạc</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- main-menu-area end -->
                            </div>
                            <div class="col-lg-4">
                                <!-- social-follow-box start -->
                                <div class="social-follow-box">
                                    <div class="follow-title">
                                        <h2>Follow us:</h2>
                                    </div>
                                    <ul class="social-follow-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <!-- social-follow-box end -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-block d-lg-none">
                                <!-- Mobile Menu Area Start -->
                                <div class="mobile-menu-area">
                                    <div class="mobile-menu">
                                        <nav id="mobile-menu-active">
                                            <ul>
                                                <li class="active"><a href="#">Home</a>
                                                    <ul class="dropdown_menu">
                                                        <li><a href="index.html">Home Page 1</a></li>
                                                        <li><a href="index-2.html">Home Page 2</a></li>
                                                        <li><a href="index-3.html">Home Page 3</a></li>
                                                        <li><a href="index-4.html">Home Page 4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Features</a>
                                                    <ul class="mega-menu">
                                                        <li><a href="#">Shop Page</a>
                                                            <ul>
                                                                <li><a href="shop.html">Shop Left</a></li>
                                                                <li><a href="shop-right.html">Shop Right</a></li>
                                                                <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                                <li><a href="single-product.html">Single Product</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Blog Page</a>
                                                            <ul>
                                                                <li><a href="blog.html">Blog Left</a></li>
                                                                <li><a href="blog-right.html">Blog Right</a></li>
                                                                <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
                                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Pages</a>
                                                            <ul>
                                                                <li><a href="my-account.html">My Account</a></li>
                                                                <li><a href="frequently-question.html">FAQ</a></li>
                                                                <li><a href="login-register.html">Login & Register</a></li>
                                                                <li><a href="error404.html">Error 404</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Column</a>
                                                            <ul>
                                                                <li><a href="about-us.html">About Us</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="cart.html">Cart Page</a></li>
                                                                <li><a href="wishlist.html">Wish List</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">For women</a>
                                                    <ul class="mega-menu mega-menu-2">
                                                        <li><a href="#">Jackets</a>
                                                            <ul>
                                                                <li><a href="#">Florals</a></li>
                                                                <li><a href="#">Shirts</a></li>
                                                                <li><a href="#">Shorts</a></li>
                                                                <li><a href="#">Stripes</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Jeans</a>
                                                            <ul>
                                                                <li><a href="#">Hoodies</a></li>
                                                                <li><a href="#">Sweaters</a></li>
                                                                <li><a href="#">Vests</a></li>
                                                                <li><a href="#">Wedges</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Men</a>
                                                            <ul>
                                                                <li><a href="#">Crochet</a></li>
                                                                <li><a href="#">Dresses</a></li>
                                                                <li><a href="#">Jeans</a></li>
                                                                <li><a href="#">Trousers</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- Mobile Menu Area End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-bottom-area end -->
            </header>

            @yield('content')

            <!-- footer-area start -->
            <footer class="footer-area">
                <div class="footer-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="about-us-footer">
                                    <div class="footer-logo">
                                        <a href="{{route('home')}}"><img src="{{url('public/uploads')}}/{{$logo_footer->value}}" alt=""></a>
                                    </div>
                                    <div class="footer-info">
                                        <p class="phone">+ {{$phone->value}}</p>
                                        <p class="desc_footer">Chúng tôi luôn mang đến cho bạn sản phẩm chất lượng nhất</p>
                                        <div class="social_follow">
                                            <ul class="social-follow-list">
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                                <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="footer-info-inner">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-6 col-sm-6">
                                            <div class="footer-title">
                                                <h3>Sản phẩm</h3>
                                            </div>
                                            <ul>
                                                <li><a href="{{route('shop_new')}}">Sản phẩm mới nhất </a></li>
                                                <li><a href="{{route('register')}}">Đăng ký </a></li>
                                                <li><a href="{{route('login')}}">Đăng nhập</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-6">
                                            <div class="footer-title">
                                                <h3>Công ty</h3>
                                            </div>
                                            <ul>
                                                <li><a href="{{route('contact')}}">Liên hệ</a></li>
                                                <li><a href="{{route('shop')}}">Cửa hàng</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-5 offset-xl-1 col-md-6 col-sm-6">
                                            <div class="footer-title">
                                                <h3>Địa chỉ</h3>
                                            </div>
                                            <div class="block-contact-text">
                                                <p> {{$address->value}}</p>
                                                <p>Call us: <span>{{$phone->value}} </span></p>
                                                <p>Email us: <span>{{$email->value}}</span></p>
                                            </div>
                                            <div class="time">
                                                <h3 class="time-title">Thời gian làm việc</h3>
                                                <div class="time-text">
                                                    <p>
                                                    {{$worktime->value}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">

                            </div>
                            <div class="col-lg-6 col-md-6">
                                 <div class="payment"><img alt="" src="{{url('public/frontend')}}/img/icon/payment.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-area start -->

            <!-- Modal start-->
            <div class="modal fade modal-wrapper" id="exampleModalCenter" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="single-product-tab">
                                        <div class="zoomWrapper">
                                            <div id="img-1" class="zoomWrapper single-zoom">
                                                <a href="#">
                                                    <img id="zoom1" src="{{url('public/frontend')}}/img/product/1.jpg" data-zoom-image="{{url('public/frontend')}}/img/product/1.jpg" alt="big-1">
                                                </a>
                                            </div>
                                            <div class="single-zoom-thumb">
                                                <ul class="s-tab-zoom single-product-active owl-carousel" id="gallery_01">
                                                    <li>
                                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{url('public/frontend')}}/img/product/1.jpg" data-zoom-image="{{url('public/frontend')}}/img/product/1.jpg"><img src="{{url('public/frontend')}}/img/product/1.jpg" alt="zo-th-1"/></a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="elevatezoom-gallery" data-image="{{url('public/frontend')}}/img/product/2.jpg" data-zoom-image="{{url('public/frontend')}}/img/product/2.jpg"><img src="{{url('public/frontend')}}/img/product/2.jpg" alt="zo-th-2"></a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="elevatezoom-gallery" data-image="{{url('public/frontend')}}/img/product/3.jpg" data-zoom-image="{{url('public/frontend')}}/img/product/3.jpg"><img src="{{url('public/frontend')}}/img/product/3.jpg" alt="ex-big-3" /></a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="elevatezoom-gallery" data-image="{{url('public/frontend')}}/img/product/4.jpg" data-zoom-image="{{url('public/frontend')}}/img/product/4.jpg"><img src="{{url('public/frontend')}}/img/product/4.jpg" alt="zo-th-4"></a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="elevatezoom-gallery" data-image="{{url('public/frontend')}}/img/product/5.jpg" data-zoom-image="{{url('public/frontend')}}/img/product/5.jpg"><img src="{{url('public/frontend')}}/img/product/5.jpg" alt="zo-th-5"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <!-- product-thumbnail-content start -->
                                    <div class="quick-view-content">
                                        <div class="product-info">
                                            <h2>Brand Name FREE RN 2018</h2>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                               <span class="new-price">$225.00</span>
                                               <span class="old-price">$250.00</span>
                                            </div>
                                            <p>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom.</p>
                                            <div class="modal-size">
                                                <h4>Size</h4>
                                                <select>
                                                    <option title="S" value="1">S</option>
                                                    <option title="M" value="2">M</option>
                                                    <option title="L" value="3">L</option>
                                                </select>
                                            </div>
                                            <div class="modal-color">
                                                <h4>Color</h4>
                                                <div class="color-list">
                                                    <ul>
                                                        <li><a href="#" class="orange active"></a></li>
                                                        <li><a href="#" class="paste"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="quick-add-to-cart">
                                                <form class="modal-cart">
                                                    <div class="quantity">
                                                        <label>Quantity</label>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" type="text" value="0">
                                                        </div>
                                                    </div>
                                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                                </form>
                                            </div>
                                            <div class="instock">
                                                <p>In stock </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-thumbnail-content end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end-->
        </div>
        <script src="{{url('public/frontend')}}/js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- jquery -->
        <script src="{{url('public/frontend')}}/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- all plugins JS hear -->
        <script src="{{url('public/frontend')}}/js/popper.min.js"></script>
        <script src="{{url('public/frontend')}}/js/bootstrap.min.js"></script>
        <script src="{{url('public/frontend')}}/js/owl.carousel.min.js"></script>
        <script src="{{url('public/frontend')}}/js/jquery.mainmenu.js"></script>
        <script src="{{url('public/frontend')}}/js/ajax-email.js"></script>
        <script src="{{url('public/frontend')}}/js/plugins.js"></script>
        <!-- main JS -->
        <script src="{{url('public/frontend')}}/js/main.js"></script>
        <script src="{{url('public/frontend')}}/js/sweetalert2.min.js"></script>
        {{-- sự kiện click cho phần địa chỉ ship --}}
        <script>
            $('#new_add').click(function(event) {
                var new_address = this.value;
                var old_address = $('#address').val();
            // alert(old_address)
            if($(this).is(':checked') ){
                $('#old_add').val(old_address);
            }
            else{
                $("#old_add").val(new_address);
            }
        });
        </script>
        {{-- Ajax cho phần cập nhật giỏ hàng --}}
        <script>
            $('.update').change(function(event) {
                var qty = this.value;
                var rowId = this.getAttribute('data-id');
                var _token =$('input[name="_token"]').val();
                $.ajax({
                   type:'POST',
                   url:"{{ route('updateAjax') }}",
                   data:{qty:qty, rowId:rowId, _token:_token},
                   success:function(data){
                        Swal.fire(
                          'Cập nhật thành công!',
                          'You clicked the button!',
                          'success'
                        )
                     $('#total').load("{{route('cart')}}");
                    }
                });
            });
        </script>
        {{-- Ajax cho phần xóa giỏ hàng --}}
        <script>
            $('.remove').click(function(event) {
                var rowId = this.getAttribute('rowId');
                var _token =$('input[name="_token"]').val();
                $.ajax({
                   type:'POST',
                   url:"{{ route('removeAjax') }}",
                   data:{rowId:rowId, _token:_token},
                   success:function(data){
                    Swal.fire(
                          'Xóa sản phẩm thành công!',
                          'You clicked the button!',
                          'success'
                        )
                      $('#total').load("{{route('cart')}}");
                    }
                });
            });
        </script>
        {{-- Ajax cho phần comment --}}
        <script>
            $('.comment-submit').click(function(event) {
                var id_blog = this.getAttribute('id_blog');
                var _token =$('input[name="_token"]').val();
                var content =$('.comment_blog').val();
                // console.log(id_blog);
                $.ajax({
                   type:'POST',
                   url:"{{ route('comment_blog') }}",
                   data:{_token:_token,content:content,id_blog:id_blog},
                   success:function(data){
                      $('#comment').load("http://localhost/shop_juta/blog_detail/cach-ve-sinh-giay-adidas #comment");
                    }
                });
                $('.comment_blog').val("");
            });
        </script>
    </body>
</html>
