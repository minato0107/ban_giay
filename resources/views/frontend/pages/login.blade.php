@extends('frontend.layout')
@section('title', 'Đăng nhập')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Đăng nhập</li>
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
                                        <h3 class="mt-4 font-weight-bold">Đăng nhập</h3>
                                    </div>
                                    <form action="" method="POST">
                                        @csrf
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                        @endif
                                        <div class="form-group mt-4">
                                            <label>Email</label>
                                            <input type="text" class="form-control" placeholder="Nhập email ..." name="email" />
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu</label>
                                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password" />
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                    <label class="custom-control-label" for="customSwitch1">Nhớ tôi</label>
                                                </div>
                                            </div>
                                            <div class="form-group col text-right"> <a href="{{route('recoverpass')}}"><i class='bx bxs-key mr-2'></i>Quên mật khẩu?</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p class="mb-0">Chưa có tài khoản? <a href="{{route('register')}}">Đăng ký</a>
                                        </p>
                                    </div>
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
