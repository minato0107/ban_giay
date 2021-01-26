@extends('frontend.layout')
@section('title', 'Tài khoản của tôi')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Tài khoản của tôi</li>
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
                    <li><a class="nav-link active"href="{{route('profile', $user->id)}}">Tài khoản của tôi</a></li>
                    <li> <a class="nav-link" href="{{route('wishlist', $user->id)}}">Yêu thích</a></li>
                    <li> <a class="nav-link" href="{{route('change_pass', $user->id)}}">Thay đổi mật khẩu</a></li>
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
                                            <h4 class="card-title">Tài khoản của tôi</h4>
                                            <form method="POST" action="{{route('post_profile', $user->id)}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="name">Họ và tên</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                                            @error('name')
                                                            <span class="text-red">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                                            @error('email')
                                                            <span class="text-red">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="phone">Số điện thoại</label>
                                                            <input type="tel" class="form-control" name="phone" id="phone"  value="{{ $user->phone }}">
                                                            @error('phone')
                                                            <span class="text-red">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="">Giới tính</label>
                                                            <div class="radio">
                                                               <label>
                                                                   <input type="radio" name="gender" id="input" value="1" {{ $user->gender==1?'checked':'' }}>
                                                                   Nam
                                                               </label>
                                                               <label>
                                                                   <input type="radio" name="gender" id="input" value="0" {{ $user->gender==0?'checked':'' }}>
                                                                   Nữ
                                                               </label>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="address" class="">Địa chỉ:</label>
                                                        <input type="text" class="form-control" id="address" name="address"  value="{{ $user->address }}">
                                                        @error('address')
                                                        <span class="text-red">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="avatar">Avatar</label>
                                                        <input type="file" accept="image/*" name="avatar" id="avatar">
                                                    </div>
                                                    @error('image')
                                                    <span class="text-red">{{$message}}</span>
                                                    @enderror
                                                    <div class="form-group">
                                                        <img src="{{ url('public/uploads/User') }}/{{ $user->avatar }}" alt="" class="w-25" style="max-width: 100px">
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success">Cập nhật</button>
                                        </form>
                                        <!--End of Update Form-->
                                    </div>
                            <!-- cart end -->
    </div>
</div>
</div>
</div>
</div>
<!-- content-wraper end -->

@endsection


