<!DOCTYPE html>
<html lang="en" class="dark-sidebar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <!--favicon-->
    <link rel="icon" href="{{url('public/backend')}}/images/favicon-32x32.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="{{url('public/backend')}}/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="{{url('public/backend')}}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{url('public/backend')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{url('public/backend')}}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{url('public/backend')}}/css/pace.min.css" rel="stylesheet" />
    <script src="{{url('public/backend')}}/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public/backend')}}/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{url('public/backend')}}/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{url('public/backend')}}/css/app.css" />
    <link rel="stylesheet" href="{{url('public/backend')}}/css/dark-sidebar.css" />
    <link rel="stylesheet" href="{{url('public/backend')}}/css/dark-theme.css" />
    {{-- nhúng datatables --}}
    <link rel="stylesheet" type="text/css" href="{{url('public/backend')}}/css/jquery.dataTables.css" />
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <a href="{{route('admin')}}">
                        <img src="{{url('public/backend')}}/images/logo-icon.png" class="logo-icon-2" alt="" />
                    </a>
                </div>

            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{route('category.index')}}">
                        <div class="parent-icon icon-color-8"><i class="bx bx-task"></i>
                        </div>
                        <div class="menu-title">Quản lý danh mục</div>
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
                        </div>
                        <div class="menu-title">Quản lý sản phẩm </div>
                    </a>
                    <ul>
                        <li><a href="{{route('product.index')}}"><div class="parent-icon icon-color-6"><i class="lni lni-producthunt"></i></div><div class="menu-title">Sản phẩm</div></a></li>

                        <li><a href="{{route('attr.index')}}"><div class="parent-icon icon-color-6"><i class="fadeIn animated bx bx-battery"></i></div><div class="menu-title">Thuộc tính</div></a></li>

                        <li><a href="{{route('review.index')}}"><div class="parent-icon icon-color-6"><i class="fadeIn animated bx bx-star"></i></div><div class="menu-title">Đánh giá</div></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('blog.index')}}">
                        <div class="parent-icon icon-color-15"><i class="fadeIn animated bx bx-news"></i>
                        </div>
                        <div class="menu-title">Quản lý tin tức</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('banner.index')}}">
                        <div class="parent-icon icon-color-7"><i class="fadeIn animated bx bx-store"></i>
                        </div>
                        <div class="menu-title">Quản lý Banner</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon icon-color-10"><i class="lni lni-cog"></i>
                        </div>
                        <div class="menu-title">Quản lý cấu hình </div>
                    </a>
                    <ul>
                        <li><a href="{{route('logo.index')}}"><div class="parent-icon icon-color-9"><i class="fadeIn animated bx bx-image"></i></div><div class="menu-title">Logo</div></a></li>

                        <li><a href="{{route('contact.index')}}"><div class="parent-icon icon-color-5"><i class="bx bx-group"></i></div><div class="menu-title">Contact</div></a></li>

                        <li><a href="{{route('ads.index')}}"><div class="parent-icon icon-color-1"><i class="fadeIn animated bx bx-spreadsheet"></i></div><div class="menu-title">Ads</div></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('user.manager')}}">
                        <div class="parent-icon icon-color-4"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">Quản lý Tài khoản</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('order.index')}}">
                        <div class="parent-icon icon-color-24"><i class="fadeIn animated bx bx-cart-alt"></i>
                        </div>
                        <div class="menu-title">Quản lý đơn hàng</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon icon-color-4"><i class="fadeIn animated bx bx-coin-stack"></i>
                        </div>
                        <div class="menu-title">Thống kê </div>
                    </a>
                    <ul>
                        <li><a href="{{route('ton-kho')}}"><div class="parent-icon icon-color-6"><i class="lni lni-producthunt"></i></div><div class="menu-title">Tồn kho</div></a></li>

                        <li><a href="{{route('ban-chay')}}"><div class="parent-icon icon-color-11"><i class="fadeIn animated bx bx-star"></i></div><div class="menu-title">Bán chạy</div></a></li>

                        <li><a href="{{route('doanh-thu')}}"><div class="parent-icon icon-color-20"><i class="fadeIn animated bx bx-cube"></i></div><div class="menu-title">Doanh thu</div></a></li>
                    </ul>
                </li>

            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar-wrapper-->
        <!--header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="left-topbar d-flex align-items-center">
                    <a href="" class="toggle-btn">  <i class="bx bx-menu"></i>
                    </a>
                </div>
                <div class="flex-grow-1 search-bar">
                    <div class="input-group">
                        <div class="input-group-prepend search-arrow-back">
                            <button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="right-topbar ml-auto">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown dropdown-user-profile">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="" data-toggle="dropdown">
                                <div class="media user-box align-items-center">
                                    <div class="media-body user-info">
                                        <p class="designattion mb-0"></p>
                                    </div>
                                    <img src="{{url('public/backend')}}/images/avatars/avatar-1.png" class="user-img" alt="user avatar">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="">
                                <div class="dropdown-divider mb-0"></div>   <a class="dropdown-item" href="{{route('admin.logout')}}"><i
                                        class="bx bx-power-off"></i><span>Logout</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end header-->
        <!--page-wrapper-->
        <div class="page-wrapper">
            <!--page-content-wrapper-->
            <div class="page-content-wrapper">
                <div class="page-title-box d-flex align-items-center justify-content-between" style="padding-top: 30px">
                    <h4 class="mb-0 font-size-18">@yield('text')</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">@yield('text1')</a></li>
                            <li class="breadcrumb-item active">@yield('text')</li>
                        </ol>
                    </div>
                </div>
            @yield('content')
            </div>
            <!--end page-content-wrapper-->
        </div>
        <!--end page-wrapper-->
        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        <div class="footer">
            <p class="mb-0">Trang quản trị Shop_giày</p>
        </div>
        <!-- end footer -->
    </div>

    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('public/backend')}}/js/jquery.min.js"></script>
    <script src="{{url('public/backend')}}/js/popper.min.js"></script>
    <script src="{{url('public/backend')}}/js/bootstrap.min.js"></script>
    <!--plugins-->
    <script src="{{url('public/backend')}}/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{url('public/backend')}}/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{url('public/backend')}}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!-- Vector map JavaScript -->
    <script src="{{url('public/backend')}}/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{url('public/backend')}}/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{url('public/backend')}}/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="{{url('public/backend')}}/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{url('public/backend')}}/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="{{url('public/backend')}}/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="{{url('public/backend')}}/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="{{url('public/backend')}}/js/index2.js"></script>
    <!-- App JS -->
    <script src="{{url('public/backend')}}/js/app.js"></script>
    {{-- JS của đường dẫn đẹp(slug) --}}
    <script src="{{ url('public/backend') }}/js/slug.js"></script>
    {{-- js của đơn vị tồn kho (sku) --}}
    <script src="{{ url('public/backend') }}/js/sku.js"></script>
    {{-- js của attr phần màu sắc --}}
    <script src="{{ url('public/backend') }}/js/attr.js"></script>
    {{-- nhúng ckeditor --}}
    <script type="text/javascript" src="{{ url('public/backend') }}/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' ,{
            filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
    </script>
    <!-- nhúng datatables -->
    <script type="text/javascript" charset="utf8" src="{{ url('public/backend') }}/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        });
    </script>
    {{-- Sự kiện modal image của product --}}
    <script src="{{ url('public/backend') }}/js/modal_image.js"></script>

</body>

</html>
