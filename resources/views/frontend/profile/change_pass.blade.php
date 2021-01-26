@extends('frontend.layout')
@section('title', 'Thay đổi mật khẩu')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Thay đổi mật khẩu</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<div class="site-wrapper-reveal top-bottom">

    <!-- Product Area Start -->

    <div class="content-wraper mt-95">
        <div class="container-fluid">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="account-dashboard mtb-60">
               <div class="row">
                <div class="col-md-12 col-lg-2">
                    <!-- Nav tabs -->
                    <ul class="nav flex-column dashboard-list" role="tablist">
                        <li><a class="nav-link "href="{{route('profile', $user->id)}}">Tài khoản của tôi</a></li>
                        <li> <a class="nav-link" href="{{route('wishlist', $user->id)}}">Yêu thích</a></li>
                        <li> <a class="nav-link active" href="{{route('change_pass', $user->id)}}">Thay đổi mật khẩu</a></li>
                        <li><a class="nav-link" href="{{route('don-mua', $user->id)}}">Đơn hàng</a></li>
                        <li><a class="nav-link" href="{{route('lich-su', $user->id)}}">Lịch sử đơn hàng</a></li>
                        <li><a class="nav-link" href="{{route('logout')}}">Đăng xuất</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-10">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard-content card-color mb-95">
                        <div id="dashboard" class="tab-pane fade show active">
                            <!-- cart start -->
                            <div class="tab-content" id="v-pills-tabContent">
                                <div>
                                    <h4 class="card-title">Thay đổi mật khẩu</h4>
                                    <form method="POST" action="{{route('post_change_pass', $user->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Mật khẩu cũ</label>
                                                    <input type="password" class="form-control" id="name" name="old_pass" value="">
                                                    @error('old_pass')
                                                    <span class="text-red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Mật khẩu mới</label>
                                                    <input type="password" class="form-control" name="new_pass" id="phone"  value="">
                                                    @error('new_pass')
                                                    <span class="text-red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address" class="">Nhập lại mật khẩu mới</label>
                                                    <input type="password" class="form-control" id="address" name="re_new_pass"  value="">
                                                    @error('re_new_pass')
                                                    <span class="text-red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-success">Thay đổi</button>
                                    </form>
                                    <!--End of Update Form-->
                                </div>
                            </div>
                            <!-- cart end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->

    </div>

    @endsection


