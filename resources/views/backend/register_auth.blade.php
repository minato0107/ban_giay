<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Trang đăng ký auth</title>
    <!--favicon-->
    <link rel="icon" href="{{url('public/backend')}}/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="{{url('public/backend')}}/css/pace.min.css" rel="stylesheet" />
    <script src="{{url('public/backend')}}/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public/backend')}}/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{url('public/backend')}}/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{url('public/backend')}}/css/app.css" />
</head>

<body class="bg-login">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="section-authentication-login d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card radius-15">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5">
                                    <div class="text-center">
                                        <img src="{{url('public/backend')}}/images/logo-icon.png" width="80" alt="">
                                        <h3 class="mt-4 font-weight-bold">Đăng ký Auth</h3>
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                    <form action="" method="post">
                                        @csrf
                                        <div class="form-group mt-4">
                                            <label>Tên</label>
                                            <input type="text" class="form-control" name="name" />
                                            @error('name')
                                            <p class="text-red">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-4">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" />
                                            @error('email')
                                            <p class="text-red">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu</label>
                                            <input type="password" class="form-control" name="password" />
                                            @error('password')
                                            <p class="text-red">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập lại mật khẩu</label>
                                            <input type="password" class="form-control" name="repassword" />
                                            @error('repassword')
                                            <p class="text-red">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
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
    <!-- end wrapper -->
</body>

</html>
