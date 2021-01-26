@extends('frontend.layout')
@section('title', 'Danh mục')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Cửa hàng</li>
                    <li class="breadcrumb-item active">{{$cate_slug->name}}</li>
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
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box mt-95">
                    <div class="sidebar-title">
                        <h2>Danh mục</h2>
                    </div>
                    <!-- category-sub-menu start -->
                    <div class="category-sub-menu">
                        <ul>
                            @foreach($category_parent as $value)
                            <li class="has-sub"><a href="# ">{{$value->name}}</a>
                                <ul>
                                    @foreach($cate_chil as $data)
                                    @if($data->parent_id == $value->id)
                                    <li><a href="{{route('danh-muc',$data->slug)}}">{{$data->name}} ({{$data->cate_pro->count()}})</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- category-sub-menu end -->
                </div>
                <!--sidebar-categores-box end  -->

                <!-- shop-banner start -->
                <div class="shop-banner">
                    <div class="shop-banner">
                        <div class="single-banner">
                            <a href="#"><img src="{{url('public/uploads')}}/{{$ads7->value}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- shop-banner end -->
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-95">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>Showing {{ $pro_cate->firstItem() }} to {{ $pro_cate->lastItem() }} of
                                    {{ $pro_cate->total() }}
                                    ({{ $pro_cate->lastPage() }} Pages)</span>
                        </div>
                    </div>

                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="shop-product-area">
                                <div class="row">
                                    @foreach($pro_cate as $value)
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('product_detail', [$value->slug, $value->id_detail])}}">
                                                    <img class="primary-image" src="{{url('public/uploads')}}/{{$value->image}}" alt="" style="width: 217px; height: 217px">
                                                </a>
                                                @if($value->sale_price>0)
                                                <div class="label-product">Giảm giá đến -{{ceil((($value->price-$value->sale_price)/($value->price))*100) }}%</div>
                                                @endif
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="rating-box">

                                                    </div>
                                                    <h4><a class="product_name" href="{{route('product_detail', [$value->slug, $value->id_detail])}}">{{$value->name}}</a></h4>
                                                    <div class="price-box">
                                                         @if($value->sale_price>0)
                                                        <span class="new-price">{{number_format($value->sale_price)}} đ</span>
                                                        <span class="old-price">{{number_format($value->price)}} đ</span>
                                                        @else
                                                        <span class="new-price">{{number_format($value->price)}} đ</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li><a class="links-details" href="{{route('product_detail', [$value->slug, $value->id_detail])}}"><i class="ion-clipboard"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane fade" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    @foreach($pro_cate as $value)
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img alt="" src="{{url('public/uploads')}}/{{$value->image}}" class="primary-image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="rating-box">
                                                        <ul class="rating">

                                                        </ul>
                                                    </div>
                                                    <h4><a href="{{route('product_detail', [$value->slug, $value->id_detail])}}" class="product_name">{{$value->name}}</a></h4>
                                                    <div class="price-box">
                                                        @if($value->sale_price>0)
                                                        <span class="new-price">{{number_format($value->sale_price)}} đ</span>
                                                        <span class="old-price">{{number_format($value->price)}} đ</span>
                                                        @else
                                                        <span class="new-price">{{number_format($value->price)}} đ</span>
                                                        @endif
                                                    </div>
                                                    <div class="list-add-actions">
                                                        <ul>
                                                            <li><a href="{{route('product_detail', [$value->slug, $value->id_detail])}}" class="links-details"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Showing {{ $pro_cate->firstItem() }} to {{ $pro_cate->lastItem() }} of
                                    {{ $pro_cate->total() }}
                                    ({{ $pro_cate->lastPage() }} Pages)</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box">
                                        @if ($pro_cate->currentPage() > 1)
                                        <li><a class="Previous" href="{{ $pro_cate->previousPageUrl() }}"><i class="fa fa-chevron-left"></i> Previous</a>
                                        @endif
                                        </li>
                                        @for($i=1; $i<$pro_cate->lastPage(); $i++)
                                        <li class="active"><a href="{{$pro_cate->url($i)}}">{{$i}}</a></li>
                                        @endfor
                                        @if ($pro_cate->currentPage() < $pro_cate->lastPage())
                                        <li>
                                          <a class="Next" href="{{$pro_cate->nextPageUrl()}}"> Next <i class="fa fa-chevron-right"></i></a>
                                        </li>
                                        @endif
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- shop-products-wrapper end -->
          </div>
      </div>
  </div>
</div>
<!-- content-wraper end -->

@endsection
