@extends('frontend.layout')
@section('title', 'Tin tức')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Tin tức</li>
                    <li class="breadcrumb-item active">{{$cate_blogs->name}}</li>
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
                <div class="blog-content-wrap mt-95">
                    <div class="row">
                        @foreach($blog_category as $value)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                            <!-- blog-wrapper start -->
                            <div class="blog-wrapper mb-30 main-blog">
                                <div class="blog-img mb-20">
                                    <a href="{{route('blog_detail', $value->slug)}}">
                                        <img alt="" src="{{url('public/uploads')}}/{{$value->image}}" style="width: 258px; height: 152px">
                                    </a>
                                </div>
                                <h3><a href="{{route('blog_detail', $value->slug)}}">{{$value->name}}</a></h3>
                                <ul class="meta-box">
                                    <li class="meta-date"><span><i aria-hidden="true" class="fa fa-calendar"></i>{{$value->created_at}}</span></li>
                                </ul>
                                <p>{{$value->description}}</p>
                                <div class="blog-meta-bundle">
                                    <div class="blog-readmore">
                                        <a href="{{route('blog_detail', $value->slug)}}">Xem thêm <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-wrapper end -->
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="pagination-box mt-10">
                            @if ($blog_category->currentPage() > 1)
                            <li><a class="Previous" href="{{ $blog_category->previousPageUrl() }}"><i class="fa fa-chevron-left"></i> Previous</a>
                            @endif
                            </li>
                            @for($i=1; $i<$blog_category->lastPage(); $i++)
                            <li class="active"><a href="{{$blog_category->url($i)}}">{{$i}}</a></li>
                            @endfor
                            @if ($blog_category->currentPage() < $blog_category->lastPage())
                            <li>
                              <a class="Next" href="{{$blog_category->nextPageUrl()}}"> Next <i class="fa fa-chevron-right"></i></a>
                          </li>
                          @endif
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- content-wraper end -->
@endsection
