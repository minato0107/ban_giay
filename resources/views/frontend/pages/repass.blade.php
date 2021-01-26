@extends('frontend.layout')
@section('title', 'Đặt lại mật khẩu')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Đặt lại mật khẩu</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<div class="site-wrapper-reveal mb-95 mt-95">

    <div class="my-account-page-warpper section-space--ptb_120">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card radius-15">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5">
                                    <div class="text-center">
                                        <img src="{{url('public/backend')}}/images/logo-icon.png" width="80" alt="">
                                        <h3 class="mt-4 font-weight-bold">Đặt lại mật khẩu của bạn</h3>
                                    </div>
                                    <form action="{{route('post_newPass', $token)}}" method="POST">
                                        @csrf
                                        <div class="form-group mt-4">
                                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" />
                                        </div>
                                        <div class="form-group mt-4">
                                            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu ..." name="re_password" />
                                        </div>
                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" class="btn btn-primary btn-block">Xác nhận</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{url('public/backend')}}/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
