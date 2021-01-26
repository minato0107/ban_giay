@extends('frontend.layout')
@section('title', 'Đăng Ký')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Đăng Ký</li>
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
                                        <h3 class="mt-2 font-weight-bold">Đăng ký</h3>

                                        @if (session('error'))
                                        <div class="alert alert-success">
                                            {{ session('error') }}
                                        </div>
                                        @endif
                                    </div>

                                    <div class="login-separater text-center"> <span></span>
                                        <hr/>
                                    </div>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-2">
                                            <label>Họ và tên</label>
                                            <input type="text" class="form-control" placeholder="" name="name" value="{{ old('name') }}" />
                                            @error('name')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <label>Email</label>
                                            <input value="{{ old('email') }}" type="text" class="form-control" placeholder="example@gmail.com" name="email" />
                                            @error('email')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Mật khẩu</label>
                                                <input value="" type="password" class="form-control" placeholder="" name="password" />
                                            </div>
                                            @error('password')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                            <div class="form-group col-md-6">
                                                <label>Nhập lại mật khẩu</label>
                                                <input value="" type="password" class="form-control" placeholder="" name="repassword" />
                                            </div>
                                            @error('repassword')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <label>Địa chỉ</label>
                                            <input value="{{ old('address') }}" type="text" class="form-control" placeholder="Trâu quỳ, Gia Lâm" name="address" />
                                            @error('address')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <label>Số điện thoại</label>
                                            <input value="{{ old('phone') }}" type="text" class="form-control" placeholder="03525969654" name="phone" />
                                            @error('phone')
                                            <span class="text-red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label>Ảnh đại diện</label>
                                                <input type="file" class="form-control" name="avatar" />
                                                @error('avatar')
                                                <span class="text-red">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Giới tính</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" id="input" value="1" checked>
                                                        Nam
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="gender" id="input" value="0">
                                                        Nữ
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                                    </form>

                                    <hr/>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{url('public/backend')}}/images/login-images/register-frent-img.jpg" class="card-img login-img h-100" alt="...">
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
