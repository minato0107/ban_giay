@extends('backend.layout')
@section('title', 'Sửa sản phẩm')
@section('text', 'Sửa sản phẩm')
@section('text1', 'Sản phẩm')
@section('content')
<div class="row fix-row" >
    <div class="col-12">
        <div class="card" >
            <div class="card-body">
                <form action="{{route('product.update', $product_id->id)}}" method="POST" role="form" enctype="multipart/form-data">
                    @method('PUT') @csrf
                    <input type="hidden" name="id" value="{{$product_id->id}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="name" placeholder="Nhập tên danh mục" name="name" onkeyup="ChangeToSlug()" value="{{$product_id->name}}">
                                @error('name')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="{{$product_id->slug}}">
                                @error('slug')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Sku</label>
                                <input type="text" class="form-control" id="sku" placeholder="Sku" name="sku" value="{{$product_id->sku}}">
                                @error('sku')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Danh mục cha</label>
                            <div class="form-group">
                                <select class="custom-select" id="classCoverageDistribution" aria-label="Example select with button addon" name="id_cate">
                                    <option value="0">----Trống----</option>
                                    @foreach($cate as $value)
                                    @if($value->type==1 && $value->parent_id != 0)
                                    <option value="{{$value->id}}" {{($value->name==$product_id->cate->name)?'selected':''}}>{{$value->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Giá sản phẩm</label>
                                <input type="number" name="price" id="input" class="form-control" value="{{$product_id->price}}" min="1">
                            </div>
                            @error('price')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Giá khuyến mãi sản phẩm</label>
                                <input type="number" name="sale_price" id="input" class="form-control" value="{{$product_id->sale_price}}" min="0">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Featured</label>
                                <div class="radio">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>
                                                <input type="radio" name="featured" id="input" value="1" checked="checked">
                                                Hiện
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="radio" name="featured" id="input" value="0">
                                                Ẩn
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <div class="radio">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>
                                                <input type="radio" name="status" id="input" value="1" checked="checked">
                                                Hiện
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="radio" name="status" id="input" value="0">
                                                Ẩn
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Ảnh sản phẩm</label>
                                <input type="hidden" class="form-control" name="image" id="image" value="{{url('public/uploads')}}/{{$product_id->image}}">
                                <a class="btn btn-primary" data-toggle="modal" href='#modal-image'><i class="fadeIn animated bx bx-images" ></i></a>
                                <img src="{{url('public/uploads')}}/{{$product_id->image}}" alt="" id="img_image" style="max-width: 100px; display: block;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="">Ảnh liên quan</label>
                                <input type="hidden" class="form-control" name="images" id="images">
                                <a class="btn btn-primary" data-toggle="modal" href='#modal-images'><i class="fadeIn animated bx bx-images" ></i></a>
                                <div id="img_images">
                                    @foreach($img_pro as $img)
                                    <img class="card-img-top imgs" style="max-width: 100px;" src="{{url('public/uploads')}}/{{$img->image}}">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Mô tả sản phẩm</label>
                                <textarea name="description" id="description" class="form-control" rows="10" >{{$product_id->description}}</textarea>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Sửa</button>
    </form>
    {{-- modal 1 ảnh  --}}
    <div class="modal fade" id="modal-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document" >
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Quản lý upload file</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="{{url('filemanager')}}/dialog.php?type=1&field_id=image" class="upload-image" style="width: 100%;height: 400px"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- modal nhiều ảnh --}}
    <div class="modal fade" id="modal-images" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document" >
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Quản lý upload file</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="{{url('filemanager')}}/dialog.php?type=1&field_id=images" class="upload-image" style="width: 100%;height: 400px"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
{{-- <p>{{url('filemanger')}}</p> --}}
@endsection
