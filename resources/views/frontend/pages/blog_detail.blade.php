@extends('frontend.layout')
@section('title', 'Chi tiết bài viết')
@section('content')
            <!-- breadcrumb-area start -->
            <div class="breadcrumb-area bg-gray">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                                <li class="breadcrumb-item active">Tin tức</li>
                                <li class="breadcrumb-item active">Chi tiết bài viết</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area end -->

            <!-- content-wraper start -->
            <div class="content-wraper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 order-2 order-lg-1">
                            <div class="single-categories-1 blog-search mt-95">
                                <h3 class="blog-categorie-title">Tìm kiếm</h3>
                                <form class="blog-search-form" action="#">
                                    <div class="form-input">
                                        <input type="text" placeholder="Tìm kiếm..." class="input-text">
                                        <button class="blog-search-button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-categories-1">
                                <h3 class="blog-categorie-title">Danh mục</h3>
                                <div class="single-categories-blog">
                                    <ul>
                                        @foreach($blog_cate as $value)
                                        <li><a href="{{route('danh-muc-tin-tuc', $value->slug)}}">{{$value->name}}</a> <span>({{$value->cate_blog->count()}})</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="single-categories-1 recent-post">
                                <h3 class="blog-categorie-title">Đăng gần nhất</h3>
                    <div class="all-recent-post">
                        @foreach($blog_new as $value)
                        <div class="single-recent-post">
                            <div class="recent-img">
                                <a href="{{route('blog_detail', $value->slug)}}"><img alt="blog-img" src="{{url('public/uploads')}}/{{$value->image}}" style="width: 95px; height: 95px"></a>
                            </div>
                            <div class="recent-desc">
                                <h6><a href="{{route('blog_detail', $value->slug)}}">{{$value->name}}</a></h6>
                                <span>{{$value->created_at}}</span>
                                </div>
                            </div>
                            @endforeach
                                </div>
                            </div>
                            <div class="single-categories-1 tag-area">
                                <img src="{{url('public/uploads')}}/{{$ads7->value}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9 order-1 order-lg-2">
                            <div class="blog-details mt-95">
                                <div class="blog-hero-img">
                                    <img src="{{url('public/uploads')}}/{{$blog_detail->image}}" alt="">
                                </div>
                                <div class="blog-details-contend mb-60">
                                    <h3 class="blog-dtl-header">{{$blog_detail->name}}</h3>
                                    <ul class="meta-box meta-blog d-flex">
                                        <li class="meta-date"><span><i aria-hidden="true" class="fa fa-calendar"></i>{{$blog_detail->created_at}}</span></li>
                                    </ul>
                                    <p class="mb-20">{!!$blog_detail->content!!}</p>

                                </div>
                                <div class="blog-pagination">
                                    <ul class="pagination">
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-long-arrow-left"></i>previous</a></li>
                                        <li class="ml-auto"><a href="#">next<i aria-hidden="true" class="fa fa-long-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                                <div class="comments-area ptb-60" id="comment">
                                    <h3 class="sidebar-header">Bình luận</h3>
                                    @foreach($comment as $value)
                                    <!-- Single Comment Start -->
                                    <div class="single-comment">
                                        <div class="comment-img">
                                            @if($value->comment_user->avatar == '')
                                            <img alt="comment-img" src="{{url('public/frontend')}}/img/blog/author-2.png" class="circle">
                                            @else
                                            <img alt="comment-img" src="{{url('public/uploads/User')}}/{{$value->comment_user->avatar}}" class="circle">
                                            @endif
                                        </div>
                                        <div class="comment-desc">
                                            <div class="comment-upper d-flex justify-content-between align-items-center">
                                                <div class="comment-title">
                                                    <h6><a href="#">{{$value->comment_user->name}}</a></h6>
                                                    <span>{{$value->created_at}}</span>
                                                </div>
                                                <div class="comment-reply">
                                                    <a href="#">reply</a>
                                                </div>
                                            </div>
                                            <p>{{$value->content}}</p>
                                        </div>
                                    </div>
                                    <!-- Single Comment End -->
                                    <!-- Single Comment Start -->
                                    @foreach($permission_comment_blog as $list)
                                    @if($value->id == $list->id_comment_blog)
                                    <div class="single-comment reply-comment">
                                        <div class="comment-img">
                                            <img alt="comment-img" src="{{url('public/frontend')}}/img/blog/author-1.png" class="circle">
                                        </div>
                                        <div class="comment-desc">
                                            <div class="comment-upper d-flex justify-content-between align-items-center">
                                                <div class="comment-title">
                                                    @if($value->comment_user->id == $list->comment_user_id->id)
                                                    <h6><a href="#">Tôi</a></h6>
                                                    @else
                                                    <h6><a href="#">{{$list->comment_user_id->name}}</a></h6>
                                                    @endif
                                                    <span>08 Jun 2017</span>
                                                </div>
                                                <div class="comment-reply">
                                                    <a href="#">reply</a>
                                                </div>
                                            </div>
                                            <p>{{$list->content}}</p>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endforeach

                                    <!-- Single Comment End -->
                                </div>
                                @if(Auth::check())
                                <div class="comments-area comments-reply-area mb-95">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="comment-reply-title">Để lại bình luận của bạn</h3>
                                                @csrf
                                                <p class="comment-form-comment">
                                                    <textarea required="required" placeholder="Bình luận" name="content" class="comment_blog"></textarea>
                                                </p>
                                                <div class="comment-form-submit">
                                                    <input type="submit" value="Đăng bình luận" id_blog="{{$blog_detail->id}}" class="comment-submit">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="comments-area comments-reply-area mb-95">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Đăng nhập để bình luận</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wraper end -->

<div class="modal fade" id="modal-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close bg-green text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container p-5">
                    <form action="{{route('post_login_blog')}}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="password">
                        </div>
                        <button type="submit" class="btn btn-success">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
